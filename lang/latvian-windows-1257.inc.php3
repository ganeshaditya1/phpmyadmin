<?php
/* $Id$ */

/**
 * Latvian language file by Sandis J�rics <sandisj at parks.lv>
 */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ce', 'Pt', 'Se');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d%m.%Y %H:%M';

$strAccessDenied = 'Pieeja aizliegta';
$strAction = 'Darb�ba';
$strAddDeleteColumn = 'Pievienot/Dz�st laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dz�st ierakstu';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPriv = 'Pievienot jaunu privil��iju';
$strAddPrivMessage = 'J�s pievienoj�t jaunu privil��iju.';
$strAddSearchConditions = 'Pievienot mekl��anas nosac�jumus ("where" izteiksmes �ermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUser = 'Pievienot jaunu lietot�ju';
$strAddUserMessage = 'J�s pievienoj�t jaunu lietot�ju.';
$strAffectedRows = 'Ietekm�to rindu skaits:';
$strAfter = 'P�c %s';
$strAfterInsertBack = 'Atgriezties iepriek��j� lap� atpaka�';
$strAfterInsertNewInsert = 'Ievietot v�l vienu rindu';
$strAll = 'Visi';
$strAlterOrderBy = 'Main�t datu k�rto�anas laukus';
$strAnalyzeTable = 'Analiz�t tabulu';
$strAnd = 'Un';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAny = 'Jebkur�';
$strAnyColumn = 'Jebkura kolonna';
$strAnyDatabase = 'Jebkura datub�ze';
$strAnyHost = 'Jebkur� hosts';
$strAnyTable = 'Jebkura tabula';
$strAnyUser = 'Jebkur� lietot�js';
$strAPrimaryKey = 'Prim�r� atsl�ga pievienota uz lauka %s';
$strAscending = 'Augo�� sec�b�';
$strAtBeginningOfTable = 'Tabulas s�kum�';
$strAtEndOfTable = 'Tabulas beig�s';
$strAttr = 'Atrib�ti';

$strBack = 'Atpaka�';
$strBinary = 'Bin�rais';
$strBinaryDoNotEdit = 'Bin�rais - netiek labots';
$strBookmarkDeleted = 'Ieraksts tika dz�sts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkQuery = 'Saglab�tie SQL-vaic�jumi';
$strBookmarkThis = 'Saglab�t �o SQL-vaic�jumu';
$strBookmarkView = 'Tikai apskat�t';
$strBrowse = 'Apskat�t';
$strBzip = 'saarhiv�ts ar bzip';

$strCantLoadMySQL = 'nevar iel�d�t MySQL papla�in�jumu,<br />l�dzu p�rbaudiet PHP konfigur�ciju.';
$strCantRenameIdxToPrimary = 'Nevar p�rsaukt indeksu par PRIMARY!';
$strCardinality = 'Kardinalit�te';
$strCarriage = 'Rindas nobeiguma simbols: \\r';
$strChange = 'Labot';
$strChangePassword = 'Main�t paroli';
$strCheckAll = 'Iez�m�t visu';
$strCheckDbPriv = 'P�rbaud�t privil��ijas uz datub�zi';
$strCheckTable = 'P�rbaud�t tabulu';
$strColumn = 'Kolonna';
$strColumnNames = 'Kolonnu nosaukumi';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strConfirm = 'Vai J�s tie��m gribat to dar�t?';
$strCookiesRequired = '�� lapa nestr�d�s korekti, ja \'Cookies\' ir atsl�gtas j�su p�rl�kprogrammas konfigur�cij�.';
$strCopyTable = 'Kop�t tabulu uz (datub�ze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika p�rkop�ta uz %s.';
$strCreate = 'Izveidot';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreateNewDatabase = 'Izveidot jaunu datub�zi';
$strCreateNewTable = 'Izveidot jaunu tabulu datub�z� %s';
$strCriteria = 'Krit�rijs';

$strData = 'Dati';
$strDatabase = 'Datub�ze ';
$strDatabaseHasBeenDropped = 'Datub�ze %s tika izdz�sta.';
$strDatabases = 'datub�zes';
$strDatabasesStats = 'Datub�zu statistika';
$strDatabaseWildcard = 'Datub�ze (var lietot aizst�j�jz�mes):';
$strDataOnly = 'Tikai dati';
$strDefault = 'Noklus�ts';
$strDelete = 'Dz�st';
$strDeleted = 'Ieraksts tika dz�sts';
$strDeletedRows = 'Ieraksti dz�sti:';
$strDeleteFailed = 'Dz��ana nenotika!';
$strDeleteUserMessage = 'J�s nodz�s�t lietot�ju %s.';
$strDescending = 'Dilsto�� sec�b�';
$strDisplay = 'Att�lot';
$strDisplayOrder = 'Att�lo�anas sec�ba:';
$strDoAQuery = 'Izpild�t "vaic�jumu p�c parauga" (aizst�j�jz�me: "%")';
$strDocu = 'Dokument�cija';
$strDoYouReally = 'Vai J�s tie��m gribat ';
$strDrop = 'Likvid�t';
$strDropDB = 'Likvid�t datub�zi %s';
$strDropTable = 'Likvid�t tabulu';
$strDumpingData = 'Dati tabulai';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPrivileges = 'Main�t privil��ijas';
$strEffective = 'Efekt�vs';
$strEmpty = 'Iztuk�ot';
$strEmptyResultSet = 'MySQL atgrieza tuk�o rezult�tu (0 rindas).';
$strEnd = 'Beigas';
$strEnglishPrivileges = ' Piez�me: MySQL privil��iju apz�m�jumi tiek rakst�ti ang�u valod� ';
$strError = 'K��da';
$strExtendedInserts = 'Papla�in�t�s INSERT izteiksmes';
$strExtra = 'Ekstras';

$strField = 'Lauks';
$strFieldHasBeenDropped = 'Lauks %s tika izdz�sts';
$strFields = 'Lauku skaits';
$strFieldsEmpty = ' Lauku skaits ir nulle! ';
$strFieldsEnclosedBy = 'Lauki iek�auti iek�';
$strFieldsEscapedBy = 'Gl�bjo�� (escape) rakstz�me ir';
$strFieldsTerminatedBy = 'Lauki atdal�ti ar';
$strFixed = 'fiks�ts';
$strFlushTable = 'Atsvaidzin�t tabulu ("FLUSH")';
$strFormat = 'Formats';
$strFormEmpty = 'Form� tr�kst v�rt�bu!';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenTime = 'Izveido�anas laiks';
$strGo = 'Aiziet!';
$strGrants = 'Ties�bas';
$strGzip = 'saarhiv�ts ar gzip';

$strHasBeenAltered = 'tika modific�ta.';
$strHasBeenCreated = 'tika izveidota.';
$strHome = 'S�kumlapa';
$strHomepageOfficial = 'Ofici�l� phpMyAdmin m�jaslapa';
$strHomepageSourceforge = 'phpMyAdmin lejupl�des lapa iek� Sourceforge';
$strHost = 'Hosts';
$strHostEmpty = 'Hosts nav nor�d�ts!';

$strIdxFulltext = 'Pilni teksti';
$strIfYouWish = 'Ja J�s v�laties iel�d�t tikai da�as tabulas kolonnas, nor�diet to nosaukumus, atdalot tos ar komatu.';
$strIgnore = 'Ignor�t';
$strIndex = 'Indekss';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indekss %s tika izdz�sts';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strInsert = 'Pievienot';
$strInsertAsNewRow = 'Ievietot k� jaunu rindu';
$strInsertedRows = 'Rindas pievienotas:';
$strInsertNewRow = 'Pievienot jaunu rindu';
$strInsertTextfiles = 'Ievietot tabul� datus no teksta faila';
$strInstructions = 'Instrukcijas';
$strInUse = 'lieto�an�';
$strInvalidName = '"%s" ir rezerv�ts v�rds, J�s nevarat lietot to k� datub�zes/tabulas/lauka nosaukumu.';

$strKeepPass = 'Nemain�t paroli';
$strKeyname = 'Atsl�gas nosaukums';
$strKill = 'Nogalin�t';

$strLength = 'Garums';
$strLengthSet = 'Garums/V�rt�bas*';
$strLimitNumRows = 'Rindu skaits vien� lap�';
$strLineFeed = 'Rindas beigu simbols: \\n';
$strLines = 'Rindas';
$strLinesTerminatedBy = 'Rindas atdal�tas ar';
$strLocationTextfile = 'Teksta faila atra�an�s vieta';
$strLogin = 'Ieiet';
$strLogout = 'Iziet';
$strLogPassword = 'Parole:';
$strLogUsername = 'Lietot�jv�rds:';

$strModifications = 'Groz�jumi tika saglab�ti';
$strModify = 'Modific�t';
$strModifyIndexTopic = 'Modific�t indeksu';
$strMoveTable = 'P�rvietot tabulu uz (datub�ze<b>.</b>tabula):';
$strMoveTableOK = 'Tabula %s tika p�rvietota uz %s.';
$strMySQLReloaded = 'MySQL serveris tika p�rl�d�ts.';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLServerProcess = 'MySQL %pma_s1% str�d� uz %pma_s2% k� %pma_s3%';
$strMySQLShowProcess = 'Par�d�t procesus';
$strMySQLShowStatus = 'Par�d�t MySQL izpildes laika inform�ciju';
$strMySQLShowVars = 'Par�d�t MySQL sist�mas main�gos';

$strName = 'Nosaukums';
$strNext = 'N�kamais';
$strNo = 'N�';
$strNoDatabases = 'Nav datub�zu';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoFrames = 'phpMyAdmin ir vair�k draudz�gs <b>freimu atbalsto�u</b> p�rl�kprogrammu.';
$strNoIndex = 'Nav defin�ti indeksi!';
$strNoIndexPartsDefined = 'Nav defin�to indeksa da�u!';
$strNoModification = 'Netika labots';
$strNone = 'Nekas';
$strNoPassword = 'Nav paroles';
$strNoPrivileges = 'Nav privil��iju';
$strNoQuery = 'Nav SQL vaic�juma!';
$strNoRights = 'Jums nav pietieko�i ties�bu, lai atrastos �eit tagad!';
$strNoTablesFound = 'Tabulas nav atrastas �aj� datub�z�.';
$strNotNumber = 'Tas nav numurs!';
$strNotValidNumber = ' nav der�gs lauku skaits!';
$strNoUsersFound = 'Lietot�ji netika atrasti.';
$strNull = 'Nulle';

$strOftenQuotation = 'Parasti p�di�as. NEOBLIG�TS noz�m�, ka tikai \'char\' un \'varchar\' tipa lauki tiek norobe�oti ar �o simbolu.';
$strOptimizeTable = 'Optimiz�t tabulu';
$strOptionalControls = 'Neoblig�ts. Nosaka, k� rakst�t vai las�t speci�l�s rakstz�mes.';
$strOptionally = 'NEOBLIG�TS';
$strOr = 'Vai';
$strOverhead = 'P�rt�ri��';

$strPartialText = 'Da��ji teksti';
$strPassword = 'Parole';
$strPasswordEmpty = 'Parole nav nor�d�ta!';
$strPasswordNotSame = 'Paroles nesakr�t!';
$strPHPVersion = 'PHP Versija';
$strPmaDocumentation = 'phpMyAdmin dokument�cija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direkt�vai ir J�B�T nodefin�tai J�su konfigur�cijas fail�!';
$strPos1 = 'S�kums';
$strPrevious = 'Iepriek��jie';
$strPrimary = 'Prim�r�';
$strPrimaryKey = 'Prim�r� atsl�ga';
$strPrimaryKeyHasBeenDropped = 'Prim�r� atsl�ga tika izdz�sta';
$strPrimaryKeyName = 'Prim�r�s atsl�gas nosaukumam j�b�t... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>j�b�t</b> tikai un <b>vien�gi</b> prim�r�s atsl�gas indeksa nosaukumam!)';
$strPrintView = 'Izdrukas versija';
$strPrivileges = 'Privil��ijas';
$strProperties = '�pa��bas';

$strQBE = 'Vaic�jums p�c parauga';
$strQBEDel = 'Dz�st';
$strQBEIns = 'Ielikt';
$strQueryOnDb = 'SQL-vaic�jums uz datub�zes <b>%s</b>:';

$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'P�rbaud�t referenci�lo integrit�ti:';
$strReloadFailed = 'Nesan�ca p�rl�d�t MySQL serveri.';
$strReloadMySQL = 'P�rl�d�t MySQL serveri';
$strRememberReload = 'Neaizmirstiet p�rl�d�t serveri.';
$strRenameTable = 'P�rsaukt tabulu uz';
$strRenameTableOK = 'Tabula %s tika p�rsaukta par %s';
$strRepairTable = 'Restaur�t tabulu';
$strReplace = 'Aizvietot';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strReType = 'Atk�rtojiet';
$strRevoke = 'Atsaukt';
$strRevokeGrant = 'At�emt \'Grant\' ties�bas';
$strRevokeGrantMessage = 'J�s at��m�t \'Grant\' ties�bas lietot�jam %s';
$strRevokeMessage = 'J�s at��m�t privil�gijas lietot�jam %s';
$strRevokePriv = 'At�emt privil��ijas';
$strRowLength = 'Rindas garums';
$strRows = 'Rindas';
$strRowsFrom = 'rindas s�kot no';
$strRowSize = ' Rindas izm�rs ';
$strRowsModeHorizontal = 'horizont�l�';
$strRowsModeOptions = '%s skat� un atk�rtot virsrakstus ik p�c %s rind�m';
$strRowsModeVertical = 'vertik�l�';
$strRowsStatistic = 'Rindas statistika';
$strRunning = 'atrodas uz %s';
$strRunQuery = 'Izpild�t vaic�jumu';
$strRunSQLQuery = 'Izpild�t SQL-vaic�jumu(s) uz datub�zes %s';

$strSave = 'Saglab�t';
$strSelect = 'Atlas�t';
$strSelectADb = 'L�dzu izv�lieties datub�zi';
$strSelectAll = 'Iez�m�t visu';
$strSelectFields = 'Izv�lieties laukus (kaut vienu):';
$strSelectNumRows = 'vaic�jum�';
$strSend = 'Saglab�t k� failu';
$strServerChoice = 'Servera izv�le';
$strServerVersion = 'Servera versija';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", l�dzu ievadiet v�rt�bas atbilsto�i �im formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpaka��jo sl�psv�tru (\) vai vienk�r�o p�di�u (\') k�d� no ��m v�rt�b�m, lieciet t�s priek�� atpaka��jo sl�psv�tru (piem�ram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShow = 'R�d�t';
$strShowAll = 'R�d�t visu';
$strShowCols = 'R�d�t kolonnas';
$strShowingRecords = 'Par�du rindas';
$strShowPHPInfo = 'Par�d�t PHP inform�ciju';
$strShowTables = 'R�d�t tabulas';
$strShowThisQuery = ' R�d�t �o vaic�jumu �eit atkal ';
$strSingly = '(vienk�r�i)';
$strSize = 'Izm�rs';
$strSort = 'K�rto�ana';
$strSpaceUsage = 'Diska vietas lieto�ana';
$strSQLQuery = 'SQL-vaic�jums';
$strStatement = 'Parametrs';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Strukt�ra un dati';
$strStrucDrop = 'Pievienot tabulu dz��anas komandas';
$strStrucExcelCSV = 'CSV dati MS Excel form�t�';
$strStrucOnly = 'Tikai strukt�ra';
$strSubmit = 'Nos�t�t';
$strSuccess = 'J�su SQL-vaic�jums tika veiksm�gi izpild�ts';
$strSum = 'Kopum�';

$strTable = 'Tabula';
$strTableComments = 'Koment�rs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav nor�d�ts!';
$strTableHasBeenDropped = 'Tabula %s tika izdz�sta';
$strTableHasBeenEmptied = 'Tabula %s tika iztuk�ota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzin�ta';
$strTableMaintenance = 'Tabulas apkalpo�ana';
$strTables = '%s tabula(s)';
$strTableStructure = 'Tabulas strukt�ra tabulai';
$strTableType = 'Tabulas tips';
$strTextAreaLength = ' Sava garuma d��,<br /> �is lauks var b�t neredi��jams ';
$strTheContent = 'J�su faila saturs tika ievietots.';
$strTheContents = 'Faila saturs aizvieto izv�l�t�s tabulas saturu rindi��m ar identisko prim�r�s vai unik�l�s atsl�gas v�rt�bu.';
$strTheTerminator = 'Lauku atdal�t�js.';
$strTotal = 'kop�';
$strType = 'Tips';

$strUncheckAll = 'Neiez�m�t neko';
$strUnique = 'Unik�lais';
$strUnselectAll = 'Neiez�m�t neko';
$strUpdatePrivMessage = 'J�s modific�j�t privil��ijas objektam %s.';
$strUpdateProfile = 'Modific�t profilu:';
$strUpdateProfileMessage = 'Profils tika modific�ts.';
$strUpdateQuery = 'Modific��anas vaic�jums';
$strUsage = 'Aiz�em';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUser = 'Lietot�js';
$strUserEmpty = 'Lietot�ja v�rds nav nor�d�ts!';
$strUserName = 'Lietot�jv�rds';
$strUsers = 'Lietot�ji';
$strUseTables = 'Lietot tabulas';

$strValue = 'V�rt�ba';
$strViewDump = 'Apskat�t tabulas dampu (sh�mu)';
$strViewDumpDB = 'Apskat�t datub�zes dampu (sh�mu)';

$strWelcome = 'Laipni l�gti %s';
$strWithChecked = 'Ar iez�m�to:';
$strWrongUser = 'K��dains lietot�jv�rds/parole. Pieeja aizliegta.';

$strYes = 'J�';

$strZip = 'arhiv�ts ar zip';
// To translate

$strAllTableSameWidth = 'display all Tables with same width?';  //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';  //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';  //to translate
$strChangeDisplay = 'Choose Field to display';  //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strChoosePage = 'Please choose a Page to edit';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strComments = 'Comments';  //to translate
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.'; //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strCreatePage = 'Create a new Page';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate

$strDisabled = 'Disabled';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strDisplayPDF = 'Display PDF schema';  //to translate
$strDumpXRows = 'Dump %s rows starting at row %s.'; //to translate

$strEditPDFPages = 'Edit PDF Pages';  //to translate
$strEnabled = 'Enabled';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate
$strExport = 'Export';  //to translate
$strExportToXML = 'Export to XML format'; //to translate

$strGenBy = 'Generated by'; //to translate
$strGeneralRelationFeat = 'General relation features';  //to translate

$strHaveToShow = 'You have to choose at least one Column to display';  //to translate

$strLinkNotFound = 'Link not found';  //to translate
$strLinksTo = 'Links to';  //to translate

$strMissingBracket = 'Missing Bracket';  //to translate
$strMySQLCharset = 'MySQL Charset';  //to translate

$strNoDescription = 'no Description';  //to translate
$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoPhp = 'without PHP Code';  //to translate
$strNotOK = 'not OK';  //to translate
$strNotSet = '<b>%s</b> table not found or not set in %s';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';//to translate

$strOK = 'OK';  //to translate
$strOperations = 'Operations';  //to translate
$strOptions = 'Options';  //to translate

$strPageNumber = 'Page number:';  //to translate
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s';  //to translate
$strPdfInvalidPageNum = 'Undefined PDF page number!';  //to translate
$strPdfInvalidTblName = 'The "%s" table does not exist!';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strPhp = 'Create PHP Code';  //to translate

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strRelationView = 'Relation view';  //to translate

$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strSearch = 'Search';//to translate
$strSearchFormTitle = 'Search in database';//to translate
$strSearchInTables = 'Inside table(s):';//to translate
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';//to translate
$strSearchOption1 = 'at least one of the words';//to translate
$strSearchOption2 = 'all words';//to translate
$strSearchOption3 = 'the exact phrase';//to translate
$strSearchOption4 = 'as regular expression';//to translate
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';//to translate
$strSearchType = 'Find:';//to translate
$strSelectTables = 'Select Tables';  //to translate
$strShowColor = 'Show color';  //to translate
$strShowGrid = 'Show grid';  //to translate
$strShowTableDimension = 'Show dimension of tables';  //to translate
$strSplitWordsWithSpace = 'Words are seperated by a space character (" ").';//to translate
$strSQL = 'SQL'; //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQLResult = 'SQL result'; //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strStructPropose = 'Propose table structure';  //to translate
$strStructure = 'Structure';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strCompression = 'Compression'; //to translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate

$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strConnections = 'Connections'; //to translate
$strFailedAttempts = 'Failed attempts'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strPerHour = 'per hour'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Query type'; //to translate
$strReceived = 'Received'; //to translate
$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strTraffic = 'Traffic'; //to translate
$strVar = 'Variable'; //to translate

$strCommand = 'Command'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strId = 'ID'; //to translate
$strProcesslist = 'Process list'; //to translate
$strStatus = 'Status'; //to translate
$strTime = 'Time'; //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strLaTeX = 'LaTeX';  //to translate

$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_jpeg__inline = 'Displays an image directly in the table (uses wrapper, direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
?>
