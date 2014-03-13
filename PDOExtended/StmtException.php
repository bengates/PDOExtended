<?php

/**
 * MIT License (MIT)
 *
 * Copyright (c) 2013 Beno!t POLASZEK
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * PDOExtended class
 * @author Beno!t POLASZEK - 2013
 */

namespace   PDOExtended;
use         PDOException;

/**
 * StmtException class allowing query debugging
 * @author Beno!t POLASZEK - 2013
 */
Class StmtException Extends PDOException {

    protected    $Stmt;

    public function __construct($Message, $Code, PDOException $Exception, PDOStatementExtended $Stmt) {
        // PB avec le code HY093, alors que $Code est cens� �tre de type long
        parent::__construct($Message, (int) $Code);
        $this->Stmt    =    $Stmt;
    }

    public function GetStmt() {
        return $this->Stmt;
    }

}