<?php
/* $Id$ */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('ѳ�', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';


$strAccessDenied = '������ ����������';
$strAction = 'ĳ�';
$strAddDeleteColumn = '������/������� ������� �������';
$strAddDeleteRow = '������/������� ����� �������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '������ ��� ������';
$strAddPrivMessage = '���� ������ ����� �������';
$strAddSearchConditions = '������ ����� ������ (��� ��� ����� "where"):';
$strAddToIndex = '������ �� �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '������ ������ �����������';
$strAddUserMessage = '���� ������ ������ �����������.';
$strAffectedRows = '������ �����:';
$strAfter = 'ϳ��� %s';
$strAfterInsertBack = '�����������';
$strAfterInsertNewInsert = '�������� ����� �����';
$strAll = '���';
$strAlterOrderBy = '������ ������� �������';
$strAnalyzeTable = '����� �������';
$strAnd = '�';
$strAnIndex = '���� ������ ������ ��� %s';
$strAny = '��������';
$strAnyColumn = '������� �������';
$strAnyDatabase = '������ ���� �����';
$strAnyHost = '�������� ����';
$strAnyTable = '������� �������';
$strAnyUser = '�������� ����������';
$strAPrimaryKey = '���� ������ ��������� ���� �� %s';
$strAscending = '����������';
$strAtBeginningOfTable = '�� ������� �������';
$strAtEndOfTable = '� ���� �������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' ������ ���� - �� ����������� ';
$strBookmarkDeleted = '�������� ���� ��������.';
$strBookmarkLabel = '̳���';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���� ��������';
$strBrowse = '�����������';
$strBzip = '���������� � "bzip"';

$strCantLoadMySQL = '���������� MySQL �� �����������,<br />�������� ������������ PHP.';
$strCantLoadRecodeIconv = '�� ���� ����������� iconv �� recode extension ��������� ��� ���� charset-�, ������������� php ���, ��� ����� ���� ��������������� �� extensions, ��� ���������� ���� charset-� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '��������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ����  ����������� ��/��� iconv, ��/��� libiconv, ��/��� ������� recode_string ���� ���� ����������� extension reports. �������� ���� php ������������.';
$strCarriage = '���������� �������: \\r';
$strCardinality = 'ʳ������ ��������';
$strChange = '������';
$strChangeDisplay = '������� ���� ��� �����������';
$strChangePassword = '������ ������';
$strCheckAll = '³������ ���';
$strCheckDbPriv = '��������� ������ ���� �����';
$strCheckTable = '��������� �������';
$strChoosePage = '����� ������� ������� ��� �����������';
$strColumn = '�������';
$strColumnNames = '����� �������';
$strComments = '��������';
$strCompleteInserts = '����� �������';
$strConfigFileError = 'phpMyAdmin �� ���� ��������� ��������������� ���� <br />�� ���� ������� � ���� �������, ���� php ��������� �� ����������� ������� (parse error) � �����, ��� �� ���� ������ ������ �����.<br />���������� ��������������� ���� ������������� �� ��������� ��������� �������� ����� � ���������� �������� ����������� ��� ������� (php error messages). ��������� ���� � ���� ������ ����� ����� �� ���������.  <br />���� �� �������� ������� �������, - ������� ��� � �������.';
$strConfigureTableCoord = '����� �������������� ���������� ������� %s';
$strConfirm = '�� �������� ������ �� �������?';
$strCookiesRequired = '� ����� ������� Cookies ������� ���� ���������.';
$strCopyTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ���������� � %s.';
$strCreate = '��������';
$strCreateNewDatabase = '�������� ���� ��';
$strCreateNewTable = '�������� ���� ������� � �� %s';
$strCreateIndex = '�������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '�������� ����� ������';
$strCreatePage = '�������� ���� �������';
$strCriteria = '�������';

$strData = '����';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ����� %s �������.';
$strDatabases = '���� �����';
$strDatabasesStats = '���������� ��� �����';
$strDatabaseWildcard = '���� ����� (��������� ������������ ��������):';
$strDataOnly = '���� ����';
$strDefault = '�� ������������';
$strDelete = '��������';
$strDeleted = '����� ��������';
$strDeletedRows = '�������� �������� �����:';
$strDeleteFailed = '��������� �� �������!';
$strDeleteUserMessage = '�������� ����������� %s.';
$strDescending = '���������';
$strDisplay = '��������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF �����';
$strDoAQuery = '�������� "����� ����� ��������" (������ �����������: "%")';
$strDocu = '������������';
$strDoYouReally = '�� �������� ������ ';
$strDrop = '�������';
$strDropDB = '������� �� %s';
$strDropTable = '�������� �������';
$strDumpingData = '���� ����� �������';
$strDumpXRows = 'Ǵ��������� ���� %s ����� ��������� � %s -��.';
$strDynamic = '���������';

$strEdit = '����������';
$strEditPDFPages = '���������� PDF �������';
$strEditPrivileges = '����������� �������';
$strEffective = '������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ��������� ������ ��������� (����� ���� �����).';
$strEnd = 'ʳ����';
$strEnglishPrivileges = ' ����������: ������ MySQL ��������� ��-��������� ';
$strError = '�������';
$strExport = '�������';
$strExportToXML = '������������ � XML ������';
$strExplain = '�������� SQL ���';
$strExtendedInserts = '��������� �������';
$strExtra = '���������';

$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� ��������';
$strFields = '����';
$strFieldsEmpty = ' �������� ������ ����! ';
$strFieldsEnclosedBy = '���� ����� �';
$strFieldsEscapedBy = '���� �����������';
$strFieldsTerminatedBy = '���� ��������';
$strFixed = '����������';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormat = '������';
$strFormEmpty = '�� ������ �������� ��� �����!';
$strFullText = '����� ������';
$strFunction = '�������';

$strGenBy = '�����������';
$strGenTime = '��� ���������';
$strGo = '������';
$strGrants = '�����';
$strGzip = '���������� � "gzip"';

$strHasBeenAltered = '���� ������.';
$strHasBeenCreated = '���� ��������.';
$strHaveToShow = '��������� ������� ������� ���� �������� ��� ������';
$strHome = '�� �������';
$strHomepageOfficial = '�������� ������� phpMyAdmin';
$strHomepageSourceforge = '������������ phpMyAdmin � Sourceforge';
$strHost = '����';
$strHostEmpty = '������� ��\'� �����!';

$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������ ����������� ���� ���� ������� �������, ������� ��������� ������ ������ ����.';
$strIgnore = '������������';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������ %s ���� �������';
$strIndexName = '����� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ����� �����';
$strInsertedRows = '������ �����:';
$strInsertNewRow = '�������� ����� �����';
$strInsertTextfiles = '�������� ������� ����� � �������';
$strInstructions = '����������';
$strInUse = '���������������';
$strInvalidName = '"%s" - ������������� �����, �� �� ������ ��������������� ���� ��� ����� ���� �����/�������/����.';

$strKeepPass = '�� �������� ������';
$strKeyname = '��\'� �����';
$strKill = '�����';

$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '������ �� �������';
$strLineFeed = '������ ���� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '����� ��������';
$strLinkNotFound = '˳�� �� ��������';
$strLinksTo = '˳��� ��';
$strLocationTextfile = '������ ������������ ���������� �����';
$strLogin = '���� � �������';
$strLogout = '����� � �������';
$strLogPassword = '������:';
$strLogUsername = '��\'� �����������:';

$strMissingBracket = '����� �����';
$strModifications = '����������� ���� ���������';
$strModify = '������';
$strModifyIndexTopic = '������ ������';
$strMoveTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMySQLReloaded = 'MySQL ���������������.';
$strMySQLSaid = '³������ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% �� %pma_s3%';
$strMySQLShowProcess = '�������� �������';
$strMySQLShowStatus = '�������� ���� MySQL';
$strMySQLShowVars = '�������� �������� ����� MySQL';

$strName = '��\'�';
$strNext = '������';
$strNo = 'ͳ';
$strNoDatabases = '�� �������';
$strNoDescription = '��� �����';
$strNoDropDatabases = '��������� "DROP DATABASE" ����������.';
$strNoFrames = '��� ������ phpMyAdmin ������� ������� � ��������� <b>������</b>.';
$strNoIndexPartsDefined = '�� ��������� ������� �������!';
$strNoIndex = '������ �� ���������!';
$strNoModification = '��� ����';
$strNone = '����';
$strNoPassword = '��� ������';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '��� �������';
$strNoQuery = '�� ������ SQL-�����!';
$strNoRights = '�� ��� ����� ���� ����������� ����!';
$strNoTablesFound = '� �� �� �������� �������.';
$strNotNumber = '�� �� �����!';
$strNotSet = '������� <b>%s</b> �� �������� ��� �� ��������� � %s';
$strNotValidNumber = ' ����������� ������� �����!';
$strNoUsersFound = '�� �������� �����������.';
$strNull = '����';
$strNumSearchResultsInTable = '%s ��������� � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ���������';

$strOftenQuotation = '�������� �����. �� ������ ������, �� ���� ���� char � varchar �������� � �����.';
$strOperations = '��������';
$strOptimizeTable = '����������� �������';
$strOptions = '���������';
$strOptionalControls = '�� ������. ��������� ������� �� ��������� ����������� �������.';
$strOptionally = '�� ������';
$strOr = '���';
$strOverhead = '������� �������';

$strPageNumber = '����� �������:';
$strPartialText = '������� ������';
$strPassword = '������';
$strPasswordEmpty = '�������� ������!';
$strPasswordNotSame = '����� �� �������!';
$strPdfDbSchema = '����� ���� ����� "%s" - ������� %s';
$strPdfInvalidPageNum = '�� ����������� ����� PDF �������!';
$strPdfInvalidTblName = '������� "%s" �� ����!';
$strPhp = '�������� PHP ���';
$strPHPVersion = '����� PHP';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '����� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������� ���� ������������ � ������ ���������������� ����!';
$strPos1 = '�������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyName = '��\'� ���������� ����� ������� ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>�������</b> ���� ������ <b>����</b> ���������� �����!)';
$strPrimaryKeyHasBeenDropped = '��������� ���� ���� �������';
$strPrintView = '����� ��� �����';
$strPrivileges = '������';
$strProperties = '����������';

$strQBE = '����� ����� ��������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryOnDb = 'SQL-����� �� �� <b>%s</b>:';

$strRecords = '������';
$strReferentialIntegrity = '������ ��������� ����� �� ���� ��������:';
$strRelationView = '�������� �����������';
$strReloadFailed = '�� ������� ��������������� MySQL.';
$strReloadMySQL = '��������������� MySQL';
$strRememberReload = '�� �������� ��������������� ������.';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '����������� �������';
$strReplace = '�������';
$strReplaceTable = '������� ���� ������� ������ � �����';
$strReset = '��������������';
$strReType = 'ϳ�����������';
$strRevoke = '³������';
$strRevokeGrant = '³������ ������� ����';
$strRevokeGrantMessage = '���� ������� ������� ���� ��� %s';
$strRevokeMessage = '�� ������ ������ ��� %s';
$strRevokePriv = '³������ ������';
$strRowLength = '������� �����';
$strRows = '�����';
$strRowsFrom = '����� �';
$strRowSize = ' ����� ����� ';
$strRowsModeVertical = ' ����������� ';
$strRowsModeHorizontal = ' ������������� ';
$strRowsModeOptions = '-�� %s � ��������� ��������� ����� ����� %s ����� ';
$strRowsStatistic = '���������� �����';
$strRunning = '�� %s';
$strRunQuery = '�������� �����';
$strRunSQLQuery = '�������� SQL �����(�) �� �� %�';

$strSave = '��������';
$strScaleFactorSmall = '������� ����� ������� ��� ����� ������� ���� �������';
$strSearch = '������';
$strSearchFormTitle = '������ � ��� �����';
$strSearchInTables = '��������� �������:';
$strSearchNeedle = '����� �� ��������, �� ������� ������ (�����: "%"):';
$strSearchOption1 = '������� ���� � ���';
$strSearchOption2 = '�� �����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '���������� �����';
$strSearchResultsFor = '���������� ������ "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSelect = '�������';
$strSelectADb = '����� ������� ���� �����';
$strSelectAll = '³������ ���';
$strSelectFields = '������� ���� (���������� ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '������� �������';
$strSend = '³������';
$strServerChoice = '���� �������';
$strServerVersion = '����� �������';
$strSetEnumVal = '��� ���� ���� "enum" �� "set", ������ �������� ����� ������ �������: \'a\',\'b\',\'c\'...<br />���� ��� ���� ������� ������ �������� ���� ����� ("\"") ��� �������� ����� ("\'") ������� ��� �������, �������� ����� ���� �������� ���� ����� (���������, \'\\\\xyz\' �� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowCols = '�������� �������';
$strShowGrid = '�������� ����';
$strShowingRecords = '�������� ������ ';
$strShowPHPInfo = '�������� ���������� ��� PHP';
$strShowTableDimension = '�������� ������ �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ����� ����� ����� ';
$strSingly = '(������)';
$strSize = '�����';
$strSort = '�����������';
$strSpaceUsage = '������, �� ���������������';
$strSplitWordsWithSpace = '����� �������� ������� (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL result';
$strStatement = '��������';
$strStrucCSV = 'CSV ����';
$strStrucData = '��������� � ����';
$strStrucDrop = '������ ��������� �������';
$strStrucExcelCSV = 'CSV ��� ����� MS Excel';
$strStrucOnly = '���� ���������';
$strStructPropose = '������������� ��������� �������';
$strStructure = '���������';
$strSubmit = '��������';
$strSuccess = '��� SQL-����� ���� ������ ��������';
$strSum = '������';

$strTable = '������� ';
$strTableComments = '�������� �� �������';
$strTableEmpty = '������� ����� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '���� ������� ��� ������� %s';
$strTableMaintenance = '������������� �������';
$strTables = '%s ������(�)';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTextAreaLength = ' ����� ������ �������,<br /> �� ���� �� ���� ���� ������������ ';
$strTheContent = '���� ����� ���� �����������.';
$strTheContents = '���� ����� ������ ���� ������� ��� ����� � ����������� ��������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� ����.';
$strTotal = '������';
$strType = '���';

$strUncheckAll = '����� �� ������';
$strUnique = '���������';
$strUnselectAll = '����� �� ������';
$strUpdatePrivMessage = '���� ������ ������ ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ���� ���������.';
$strUpdateQuery = '��������� �����';
$strUsage = '������������';
$strUseBackquotes = '�������� ����� � ������ ������� � ����';
$strUser = '����������';
$strUserEmpty = '������� �\'�� �����������!';
$strUserName = '��\'� �����������';
$strUsers = '�����������';
$strUseTables = '��������������� �������';

$strValue = '��������';
$strViewDump = '����������� ���� (�����) �������';
$strViewDumpDB = '����������� ���� (�����) ��';

$strWelcome = '������� ������� �� %s';
$strWithChecked = '� ���������:';
$strWrongUser = '������� ����/������. ������ �� ���������.';

$strYes = '���';

$strZip = '���������� � "zip"';

// To translate

$strMySQLCharset = 'MySQL Charset';
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strGeneralRelationFeat = 'Genereal Relation Features';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strDisabled = 'Disabled';  //to translate
$strEnabled = 'Enabled';  //to translate
$strOK = 'OK';  //to translate
$strNotOK = 'not OK';  //to translate
?>
