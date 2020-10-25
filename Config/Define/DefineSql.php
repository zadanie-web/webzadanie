<?php
/**
 * SQL SELECT
 */
// KATEGORY
define('SELECTKATEGORY','SELECT * FROM Kategory');
define('SELECTFORCATEGORY','SELECT image from Foto where id_category = :id_category');
/**
 * SQL INSERT
 */
// KATEGORY INSERT
define('NEWKATEGORY','INSERT INTO Kategory(name) value (:mykatname)');

/**
 * SQL FIN EXIST
 */
define('FINDEXISTKATEGORY','SELECT name FROM Kategory where name=:mykatname');

