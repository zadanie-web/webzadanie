<?php
/**
 * SQL SELECT
 */
// KATEGORY
define('SELECTKATEGORY','SELECT * FROM Kategory');

/**
 * SQL INSERT
 */
// KATEGORY INSERT
define('NEWKATEGORY','INSERT INTO Kategory(name) value (:mykatname)');

/**
 * SQL FIN EXIST
 */
define('FINDEXISTKATEGORY','SELECT name FROM Kategory where name=:mykatname');
