<?php

declare(strict_types=1);

namespace Doctrine\Tests\ORM\Query;

use Doctrine\Common\Persistence\PersistentObject;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\QueryException;
use Doctrine\ORM\Query\TokenType;
use Doctrine\Tests\Models\CMS\CmsUser;
use Doctrine\Tests\OrmTestCase;
use stdClass;

use function class_exists;

class ParserTest extends OrmTestCase
{
    /**
     * @covers \Doctrine\ORM\Query\Parser::AbstractSchemaName
     * @group DDC-3715
     */
    public function testAbstractSchemaNameSupportsFQCN(): void
    {
        $parser = $this->createParser(CmsUser::class);

        self::assertEquals(CmsUser::class, $parser->AbstractSchemaName());
    }

    /**
     * @covers Doctrine\ORM\Query\Parser::AbstractSchemaName
     * @group DDC-3715
     */
    public function testAbstractSchemaNameSupportsClassnamesWithLeadingBackslash(): void
    {
        $parser = $this->createParser('\\' . CmsUser::class);

        self::assertEquals('\\' . CmsUser::class, $parser->AbstractSchemaName());
    }

    /**
     * @covers \Doctrine\ORM\Query\Parser::AbstractSchemaName
     * @group DDC-3715
     */
    public function testAbstractSchemaNameSupportsIdentifier(): void
    {
        $parser = $this->createParser(stdClass::class);

        self::assertEquals(stdClass::class, $parser->AbstractSchemaName());
    }

    /**
     * @covers \Doctrine\ORM\Query\Parser::AbstractSchemaName
     * @group DDC-3715
     */
    public function testAbstractSchemaNameSupportsNamespaceAlias(): void
    {
        if (! class_exists(PersistentObject::class)) {
            self::markTestSkipped('This test requires doctrine/persistence 2');
        }

        $parser = $this->createParser('CMS:CmsUser');

        $parser->getEntityManager()->getConfiguration()->addEntityNamespace('CMS', 'Doctrine\Tests\Models\CMS');

        self::assertEquals(CmsUser::class, $parser->AbstractSchemaName());
    }

    /**
     * @covers \Doctrine\ORM\Query\Parser::AbstractSchemaName
     * @group DDC-3715
     */
    public function testAbstractSchemaNameSupportsNamespaceAliasWithRelativeClassname(): void
    {
        if (! class_exists(PersistentObject::class)) {
            self::markTestSkipped('This test requires doctrine/persistence 2');
        }

        $parser = $this->createParser('Model:CMS\CmsUser');

        $parser->getEntityManager()->getConfiguration()->addEntityNamespace('Model', 'Doctrine\Tests\Models');

        self::assertEquals(CmsUser::class, $parser->AbstractSchemaName());
    }

    /**
     * @dataProvider validMatches
     * @covers Doctrine\ORM\Query\Parser::match
     * @group DDC-3701
     */
    public function testMatch(int $expectedToken, string $inputString): void
    {
        $parser = $this->createParser($inputString);

        $parser->match($expectedToken); // throws exception if not matched

        $this->addToAssertionCount(1);
    }

    /**
     * @dataProvider invalidMatches
     * @covers Doctrine\ORM\Query\Parser::match
     * @group DDC-3701
     */
    public function testMatchFailure(int $expectedToken, string $inputString): void
    {
        $this->expectException(QueryException::class);

        $parser = $this->createParser($inputString);

        $parser->match($expectedToken);
    }

    /** @phpstan-return list<array{int, string}> */
    public static function validMatches(): array
    {
        /*
         * This only covers the special case handling in the Parser that some
         * tokens that are *not* T_IDENTIFIER are accepted as well when matching
         * identifiers.
         *
         * The basic checks that tokens are classified correctly do not belong here
         * but in LexerTest.
         */
        return [
            [TokenType::T_WHERE, 'where'], // keyword
            [TokenType::T_DOT, '.'], // token that cannot be an identifier
            [TokenType::T_IDENTIFIER, 'someIdentifier'],
            [TokenType::T_IDENTIFIER, 'from'], // also a terminal string (the "FROM" keyword) as in DDC-505
            [TokenType::T_IDENTIFIER, 'comma'],
            // not even a terminal string, but the name of a constant in the Lexer (whitebox test)
        ];
    }

    /** @phpstan-return list<array{int, string}> */
    public static function invalidMatches(): array
    {
        return [
            [TokenType::T_DOT, 'ALL'], // ALL is a terminal string (reserved keyword) and also possibly an identifier
            [TokenType::T_DOT, ','], // "," is a token on its own, but cannot be used as identifier
            [TokenType::T_WHERE, 'WITH'], // as in DDC-3697
            [TokenType::T_WHERE, '.'],

            // The following are qualified or aliased names and must not be accepted where only an Identifier is expected
            [TokenType::T_IDENTIFIER, '\\Some\\Class'],
            [TokenType::T_IDENTIFIER, 'Some\\Class'],
            [TokenType::T_IDENTIFIER, 'Some:Name'],
        ];
    }

    /**
     * PHP 7.4 would fail with Notice: Trying to access array offset on value of type null.
     *
     * @see https://github.com/doctrine/orm/pull/7934
     *
     * @group GH7934
     */
    public function testNullLookahead(): void
    {
        $query = new Query($this->getTestEntityManager());
        $query->setDQL('SELECT CURRENT_TIMESTAMP()');

        $parser = new Parser($query);

        $this->expectException(QueryException::class);
        $parser->match(TokenType::T_SELECT);
    }

    private function createParser(string $dql): Parser
    {
        $query = new Query($this->getTestEntityManager());
        $query->setDQL($dql);

        $parser = new Parser($query);
        $parser->getLexer()->moveNext();

        return $parser;
    }
}
