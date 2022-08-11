<?php
/**
 * A result decorator.
 *
 * PHP Version 5
 *
 * @category   Pagi
 * @package    Client
 * @subpackage Result
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAGI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAGI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PAGI\Client\Result;

/**
 * A result decorator.
 *
 * PHP Version 5
 *
 * @category   Pagi
 * @package    Client
 * @subpackage Result
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAGI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAGI/
 */
abstract class ReadResultDecorator implements IReadResult
{
    /**
     * Our decorated result.
     * @var IReadResult
     */
    private $result;

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IResult::getOriginalLine()
     */
    public function getOriginalLine()
    {
        return $this->result->getOriginalLine();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IResult::getCode()
     */
    public function getCode()
    {
        return $this->result->getCode();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IResult::getResult()
     */
    public function getResult()
    {
        return $this->result->getResult();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IResult::isResult()
     */
    public function isResult($value)
    {
        return $this->result->isResult($value);
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IResult::hasData()
     */
    public function hasData()
    {
        return $this->result->hasData();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IResult::getData()
     */
    public function getData()
    {
        return $this->result->getData();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IReadResult::isTimeout()
     */
    public function isTimeout()
    {
        return $this->result->isTimeout();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IReadResult::getDigits()
     */
    public function getDigits()
    {
        return $this->result->getDigits();
    }

    /**
     * (non-PHPdoc)
     * @see PAGI\Client\Result.IReadResult::getDigitsCount()
     */
    public function getDigitsCount()
    {
        return strlen($this->result->getDigits());
    }
    /**
     * Standard drill.
     */
    public function __toString()
    {
        return $this->result->__toString();
    }
    /**
     * Constructor.
     *
     * @param IReadResult $result Result to decorate.
     */
    public function __construct(IReadResult $result)
    {
        $this->result = $result;
    }
}
