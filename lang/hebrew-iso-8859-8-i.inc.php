<?php
/* $Id$ */

/* Translated by: Yuval "Etus" Sarna */

$charset = 'iso-8859-8-i';
$text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('�����', '���', '�����', '�����', '�����', '����', '���');
$month = array('�����', '������', '���', '�����', '���', '����', '����', '������', '������', '�������', '������', '�����');
// See <http://www.php.net/manual/en/function.strftime.php> to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$timespanfmt = '%s ����, %s ����, %s ���� �-%s �����';

$strAPrimaryKey = '���� ���� ������ �- %s';
$strAbortedClients = '����';
$strAccessDenied = '����� �����';
$strAction = '�����';
$strAddDeleteColumn = '����/��� ����� ���';
$strAddDeleteRow = '����/��� ���� ��������';
$strAddNewField = '���� ��� ���';
$strAddPriv = '���� ����� ����';
$strAddPrivMessage = '����� ����� ����.';
$strAddPrivilegesOnDb = '���� ������ ����� ������� �����';
$strAddPrivilegesOnTbl = '���� ������ ������� �����';
$strAddSearchConditions = '���� ���� ����� (���� �� "where"):';
$strAddToIndex = '���� ������� &nbsp;%s&nbsp;����/�����';
$strAddUser = '���� ����� ���';
$strAddUserMessage = '����� ����� ���.';
$strAddedColumnComment = '���� ������� ������';
$strAdministration = '�����';
$strAffectedRows = '����� �������:';
$strAfter = '���� %s';
$strAfterInsertBack = '���� ����� �����';
$strAfterInsertNewInsert = '���� ���� ���� �����';
$strAll = '���';
$strAllTableSameWidth = '��� ������ ����� �� �� ������� ����� ����?';
$strAlterOrderBy = '��� �� ��� ����� ��-���';
$strAnIndex = '������ ������ �- %s';
$strAnalyzeTable = '��� ����';
$strAnd = '���';
$strAny = '��';
$strAnyColumn = '�� �����';
$strAnyDatabase = '�� ��� ������';
$strAnyHost = '�� ����';
$strAnyTable = '�� ����';
$strAnyUser = '�� �����';
$strAscending = '����';
$strAtBeginningOfTable = '������ ����';
$strAtEndOfTable = '���� ����';
$strAttr = '������';

$strBack = '����';
$strBeginCut = '����� �����';
$strBinary = '������';
$strBinaryDoNotEdit = '������ - �� �����';
$strBookmarkDeleted = '�- Bookmark ����.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '����� �- SQL ������� �- Bookmark';
$strBookmarkThis = '���� �- Bookmark �� ����� �- SQL ���';
$strBookmarkView = '������ ����';
$strBrowse = '����';
$strBzip = '"BZipped"';

$strCannotLogin = '������� ���� �- MySQL �����';
$strCantRenameIdxToPrimary = '�� ���� ����� �� ������� ������ !';
$strCardinality = 'Cardinality';
$strCarriage = '�� ����� ����: \\r';
$strChange = '���';
$strChangeDisplay = '��� ��� �����';
$strChangePassword = '��� �����';
$strCheckAll = '��� ���';
$strCheckDbPriv = '���� �� ������ ��� �������';
$strCheckPrivs = '���� ������';
$strCheckPrivsLong = '���� ������ ���� ������� &quot;%s&quot;.';
$strCheckTable = '���� ����';
$strChoosePage = '��� ��� ���� ������';
$strColumn = '�����';
$strColumnNames = '���� ������';
$strCommand = '�����';
$strComments = '�����';
$strCompleteInserts = '���� ������';
$strCompression = '�����';
$strConfigFileError = 'phpMyAdmin �� ����� ����� �� ���� ������������ ���! ��� �� ���� �� PHP ���� ���� ���� ����� �� �� ��� �� ���� �� �����.<br> ��� ��� ����� ������������ ������ ����� ������ ���� ������ �� ���� �� ����� PHP ����� ����. ���� ������ ��� �� �����-���� ����� ����� �����.<br> �� ���� ���� �� ���, ��� ����.';
$strConfirm = '��� ���� ���� ����� �� ��?';
$strConnections = '�������';
$strCookiesRequired = '������ ������ ����� ����� ������ ���� ����� ��.';
$strCopyTable = '���� ���� �- (��� ������<b>.</b>����):';
$strCopyTableOK = '����� %s ������ �- %s.';
$strCreate = '���';
$strCreateIndex = '��� ����� �-&nbsp;%s&nbsp;�����';
$strCreateIndexTopic = '��� ����� ���';
$strCreateNewDatabase = '��� ��� ������ ���';
$strCreateNewTable = '��� ���� ���� �� ��� ������� %s';
$strCreatePage = '��� ���� ���';
$strCriteria = '��������';

$strDBComment = '���� ��� ������: ';
$strDBGLine = '����';
$strDBGModule = '�����';
$strData = '����';
$strDataDict = '����� ����';
$strDataOnly = '���� ����';
$strDatabase = '��� ������ ';
$strDatabaseHasBeenDropped = '��� ������� %s ����.';
$strDatabaseWildcard = '��� ������ (����� ������ ������):';
$strDatabases = '���� �������';
$strDatabasesDropped = '%s ���� ������ ����� ������.';
$strDatabasesStats = '��������� ��� �������';
$strDatabasesStatsDisable = '��� ���������';
$strDatabasesStatsEnable = '���� ���������';
$strDefault = '����� ����';
$strDelete = '���';
$strDeleteFailed = '����� ����� !';
$strDeleteUserMessage = '���� �� ������ %s.';
$strDeleted = '����� �����';
$strDeletedRows = '����� ������:';
$strDeleting = '���� %s';
$strDescending = '����';
$strDisabled = '���� �����';
$strDisplay = '���';
$strDisplayFeat = '��� ��������';
$strDisplayOrder = '��� ����:';
$strDisplayPDF = '��� ���� ������ PDF';
$strDoAQuery = '��� "������ ������" (�� ����: "%")';
$strDoYouReally = '��� ��� ���� ���� ���� ';
$strDocu = '�����';
$strDrop = '���';
$strDropDB = '��� ��� ������ %s';
$strDropTable = '��� ����';
$strDumpingData = '���� ���� �����';
$strDynamic = '������';

$strEdit = '����';
$strEditPDFPages = '���� ��� PDF';
$strEditPrivileges = '���� ������';
$strEffective = '�������';
$strEmpty = '����';
$strEmptyResultSet = 'MySQL ����� 0 ������ �� ��� �������(�����, 0 �����).';
$strEnabled = '�����';
$strEnd = '���';
$strEndCut = '���� �����';
$strEnglishPrivileges = ' ����: ������ MySQL ������ ������� ';
$strError = '����';
$strExplain = '���� ������ SQL';
$strExport = '����';
$strExportToXML = '���� ������ XML';
$strExtendedInserts = '������ �������';
$strExtra = '����';

$strField = '���';
$strFieldHasBeenDropped = '���� %s ����';
$strFields = '����';
$strFieldsEmpty = ' ����� ����� ���� ! ';
$strFieldsEnclosedBy = '��� ���� ��';
$strFieldsEscapedBy = '���� ���� ��';
$strFieldsTerminatedBy = '���� ���� ��';
$strFixed = '����';
$strFlushTable = '���� �� ��� ������� ("����")';
$strFormEmpty = '��� ���� �� ����� !';
$strFormat = '�����';
$strFullText = '���� ���';
$strFunction = '��������';

$strGenBy = '���� ��-���';
$strGenTime = '��� �����';
$strGlobal = '�������';
$strGlobalPrivileges = '������ ���������';
$strGlobalValue = '��� �������';
$strGo = '���';
$strGrants = '������';
$strGzip = '"GZipped"';

$strHasBeenAltered = '����.';
$strHasBeenCreated = '����.';
$strHaveToShow = '���� ����� ����� ����� ���';
$strHome = '���� ����';
$strHomepageOfficial = '��� phpMyAdmin �����';
$strHomepageSourceforge = '���� ������� �� phpMyAdmin ���� Sourceforge';
$strHost = '����';
$strHostEmpty = '���� ����� ��� !';

$strIdxFulltext = '���� ���';
$strIfYouWish = '�� ������ ����� �� ��� �� ������ �����, ���� ���� ������ ��� ����� �����.';
$strIgnore = '�����';
$strInUse = '������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s ����';
$strIndexName = '�� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexes = '��������';
$strInsert = '����';
$strInsertAsNewRow = '����� ����� ����';
$strInsertNewRow = '���� ���� ����';
$strInsertTextfiles = '���� ���� ���� ���� ���� �����';
$strInsertedRows = '����� �������:';
$strInstructions = '������';
$strInvalidName = '"%s" ��� ���� �����, ���� ���� ������ �� ���� ������/����/���.';

$strKeepPass = '�� ���� �� ������';
$strKeyname = '�� ����';
$strKill = '���';

$strLandscape = '����� ����� ���';
$strLength = '����';
$strLengthSet = '����/�����*';
$strLimitNumRows = '���� ������ ��� ��';
$strLineFeed = '���� ����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '����� ������ ��-���';
$strLinkNotFound = '����� �� ����';
$strLinksTo = '������� �-';
$strLocalhost = '�����';
$strLocationTextfile = '����� ���� �����';
$strLogPassword = '�����:';
$strLogUsername = '�� �����:';
$strLogin = '����';
$strLogout = '�����';

$strMissingBracket = '������ �����';
$strModifications = '�������� �����';
$strModify = '���';
$strModifyIndexTopic = '��� ������';
$strMoveTable = '���� ���� �- (��� ������<b>.</b>����):';
$strMoveTableOK = '����� %s ������ �- %s.';
$strMySQLReloaded = 'MySQL ���� ����.';
$strMySQLSaid = 'MySQL ���: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� �� %pma_s2% �- %pma_s3%';
$strMySQLShowProcess = '���� �������';
$strMySQLShowStatus = '���� �� ���� ����� �� MySQL';
$strMySQLShowVars = '���� �� ����� ������ �� MySQL';

$strName = '��';
$strNext = '���';
$strNo = '��';
$strNoDatabases = '��� ���� ������';
$strNoDescription = '��� �����';
$strNoDropDatabases = '������ "DROP DATABASE" ������.';
$strNoExplain = '��� �� ����� ������ �- SQL';
$strNoFrames = 'phpMyAdmin ��� ���� ������� �� ����� <b>����� ��������</b>.';
$strNoIndex = '������ �� ����� !';
$strNoIndexPartsDefined = '��� ���� ������ ������� !';
$strNoModification = '��� �����';
$strNoOptions = '������ �� ��� ��������';
$strNoPassword = '��� �����';
$strNoPhp = '��� ��� PHP';
$strNoPrivileges = '��� ������';
$strNoQuery = '��� ������ SQL !';
$strNoRights = '��� �� ����� ������ ��� ����� ��� ����� !';
$strNoTablesFound = '������ �� ����� ���� �������.';
$strNoUsersFound = '�� �����/������� �����.';
$strNoUsersSelected = '������� �� �����.';
$strNone = 'NULL';
$strNotNumber = '��� �� ���� !';
$strNotSet = '����� <b>%s</b> �� ����� �- %s';
$strNotValidNumber = ' ��� �� ���� ���� �� ���� !';
$strNull = 'NULL';
$strNumSearchResultsInTable = '%s �����/������ ���� ����� <i>%s</i>';
$strNumTables = '������';

$strOftenQuotation = '������ ������. ���� ������ ������ ��� ���� char �- varchar ������ �� ��� ������.';
$strOperations = '������';
$strOptimizeTable = '���� ����';
$strOptionalControls = '������. ���� �� ����� ������ �� ������ �������.';
$strOptionally = '���� ������';
$strOptions = '��������';
$strOr = '��';
$strOverhead = '�����';

$strPHPVersion = '���� PHP';
$strPageNumber = '���� ����:';
$strPartialText = '������ ������';
$strPassword = '�����';
$strPasswordChanged = '������ �- %s ������ ������.';
$strPasswordEmpty = '������ ���� !';
$strPasswordNotSame = '�������� ���� ���� !';
$strPdfDbSchema = '���� ��� ������� "%s" - ���� %s';
$strPdfInvalidPageNum = '���� ���� �� PDF �� �����!';
$strPdfInvalidTblName = '����� "%s" �� �����!';
$strPdfNoTables = '��� ������';
$strPerHour = '��� ���';
$strPerMinute = '��� ���';
$strPerSecond = '��� �����';
$strPhp = '��� ��� PHP';
$strPmaDocumentation = '���������� phpMyAdmin';
$strPmaUriError = '������ �- <tt>$cfg[\'PmaAbsoluteUri\']</tt> ����� ����� ������ ����� ������������ ���!';
$strPortrait = '����� ����� ���';
$strPos1 = '����';
$strPrevious = '�����';
$strPrimary = '����';
$strPrimaryKey = '���� ����';
$strPrimaryKeyHasBeenDropped = '����� ����� ����';
$strPrimaryKeyName = '��� �� ����� ����� ���� �����... ���� !';
$strPrimaryKeyWarning = '("���� ����" <b>����</b> ������� ��� �� ���� ���� !)';
$strPrint = '����';
$strPrintView = '���� �����';
$strPrivDescAlter = '���� �� ����� ����� �� ������ ������.';
$strPrivDescCreateDb = '���� �� ������ �� ���� ������ ������� �����.';
$strPrivDescCreateTbl = '���� �� ������ �� ������ �����.';
$strPrivDescCreateTmpTable = '���� �� ������ �� ������ ������';
$strPrivDescDelete = '���� ����� ����.';
$strPrivDescDropDb = '���� �� ������ �� ���� ������ �������.';
$strPrivDescDropTbl = '���� �� ������ �� ������.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescUsage = '��� �����.';
$strPrivileges = '������';
$strPrivilegesReloaded = '������� ����� ���� ������.';
$strProcesslist = '����� �������';
$strProperties = '��������';

$strQBE = '������ ������';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = '������ SQL �� ��� ������� <b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = '��� ������';

$strReType = '���� ����';
$strReceived = '�����';
$strRecords = '������';
$strReferentialIntegrity = '���� �� �- Referential Integrity:';
$strRelationView = '����� ���';
$strReloadFailed = '����� ���� �� MySQL �����.';
$strReloadMySQL = '��� ���� �� MySQL';
$strReloadingThePrivileges = '���� ���� �� �������';
$strRememberReload = '���� ����� ���� �� ����.';
$strRemoveSelectedUsers = '��� ������� ������';
$strRenameTable = '��� �� �� ����� �-';
$strRenameTableOK = '�� ����� %s ����� �- %s';
$strRepairTable = '��� ����';
$strReplace = '����';
$strReplaceTable = '���� �� �� ����� �� ����';
$strReset = '���';
$strRevoke = '����';
$strRevokeGrant = '����� �����';
$strRevokeGrantMessage = '���� �� ����� �- Grant �- %s';
$strRevokeMessage = ' ���� �� ������ �- %s';
$strRevokePriv = '���� ������';
$strRowLength = '���� ����';
$strRowSize = ' ���� ����� ';
$strRows = '�����';
$strRowsFrom = '����� �������� �-';
$strRowsModeHorizontal = '�����';
$strRowsModeOptions = '���� %s ���� �� ������ ������� ���� %s ����';
$strRowsModeVertical = '�����';
$strRowsStatistic = '��������� �����';
$strRunQuery = '��� ������';
$strRunSQLQuery = '��� �� ������/������� �� ��� ������� %s';
$strRunning = '�� �� %s';

$strSQL = 'SQL';
$strSQLQuery = '������ SQL';
$strSQLResult = '������ SQL';
$strSave = '����';
$strSearch = '���';
$strSearchFormTitle = '��� ���� �������';
$strSearchInTables = '���� �����/�������:';
$strSearchOption1 = '����� ��� �� ������';
$strSearchOption2 = '�� ������';
$strSearchOption3 = '������ �������';
$strSearchOption4 = '������ ����';
$strSearchResultsFor = '������ ����� �- "<i>%s</i>" %s:';
$strSearchType = '���:';
$strSelect = '���';
$strSelectADb = '��� ����� ��� ������';
$strSelectAll = '��� ���';
$strSelectFields = '��� ���� (����� ���):';
$strSelectNumRows = '���� ������';
$strSelectTables = '��� ������';
$strSend = '���� �����';
$strSent = '����';
$strServer = '��� %s';
$strServerChoice = '����� ���';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '������';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVersion = '���� ���';
$strSetEnumVal = '�� ��� ���� ��� enum �� set, ���� ����� ����� �������� ������ ���: \'a\',\'b\',\'c\'...<br />�� ���� �� ��� ���� \ �� ����� ��� ��� �� ������ ����, ���� \ �����.';
$strShow = '����';
$strShowAll = '���� ���';
$strShowColor = '��� ���';
$strShowCols = '���� �����';
$strShowGrid = '��� ���';
$strShowPHPInfo = '���� ���� PHP';
$strShowTableDimension = '��� �� ���� �����';
$strShowTables = '���� ������';
$strShowThisQuery = ' ���� �� ������� ��� ���� ';
$strShowingRecords = '���� �����';
$strSingly = '(�����)';
$strSize = '����';
$strSort = '�����';
$strSpaceUsage = '��� ����';
$strSplitWordsWithSpace = '������ ������� �� ��� �� ���� (" ").';
$strStatCheckTime = '����� ������';
$strStatCreateTime = '�����';
$strStatUpdateTime = '����� �����';
$strStatement = '������';
$strStatus = '���';
$strStrucCSV = '���� CSV';
$strStrucData = '����� �����';
$strStrucDrop = '���� \'��� ����\'';
$strStrucExcelCSV = 'CVS ����� Ms Excel';
$strStrucOnly = '���� ����';
$strStructPropose = '��� ���� ����';
$strStructure = '�����';
$strSubmit = '���';
$strSuccess = '������ �- SQL ��� ����� ������';
$strSum = '�����';

$strTable = '����';
$strTableComments = '����� ����';
$strTableEmpty = '�� ����� ��� !';
$strTableHasBeenDropped = '����� %s �����';
$strTableHasBeenEmptied = 'Table %s �����';
$strTableHasBeenFlushed = 'Table %s ����� ������ �����';
$strTableMaintenance = '����� ����';
$strTableOfContents = '���� ��������';
$strTableStructure = '���� ���� �����';
$strTableType = '��� ����';
$strTables = '%s ����/������';
$strTextAreaLength = ' ���� �����,<br /> ���� ���� �� �� ���� ������ ';
$strTheContent = '����� �� ���� �����.';
$strTheContents = '����� �� ����� ��� ����� �� ����� �� ����� ������ ������ �� ���� ���� �� ���� ����� ���.';
$strTheTerminator = '���� �� �����.';
$strThisNotDirectory = '�� �� ����� ������';
$strTime = '���';
$strTotal = '��-���';
$strTotalUC = '��-���';
$strType = '���';

$strUncheckAll = '��� ����� �� ���';
$strUnique = '�����';
$strUnselectAll = '��� ����� �� ���';
$strUpdatePrivMessage = '������ �� ������� �- %s.';
$strUpdateProfile = '���� ������:';
$strUpdateProfileMessage = '������� �����.';
$strUpdateQuery = '���� ������';
$strUsage = '�����';
$strUseBackquotes = '����� ������� ������� �� ������ ����� ����';
$strUseTables = '����� �������';
$strUser = '�����';
$strUserEmpty = '�� ������ ��� !';
$strUserName = '�� �����';
$strUsers = '�������';
$strUsersDeleted = '������ ����� ���� ������.';

$strValue = '���';
$strVar = '�����';
$strViewDump = '���� �� ���� �����';
$strViewDumpDB = '���� �� ���� ��� �������';

$strWelcome = '���� ��� �- %s';
$strWithChecked = '���� ��:';
$strWrongUser = '�� �����/����� ������. ����� �����.';

$strYes = '��';

$strZip = '"Zipped"';
//To translate:
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate

$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

$strBeginRaw = 'BEGIN RAW';  //to translate
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate

$strCSVOptions = 'CSV options';//to translate
$strCantLoad = '������ %s �� ����� ������,<br />��� ���� �� ������ �- PHP ���.';  //to translate
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';  //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate

$strDBGContext = 'Context';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strDbSpecific = 'database-specific';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDumpXRows = 'Dump %s rows starting at row %s.'; //to translate

$strEndRaw = 'END RAW';  //to translate

$strFailedAttempts = 'Failed attempts'; //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strFileNameTemplate = 'File name template';//to translate
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGeneralRelationFeat = 'General relation features';  //to translate
$strGrantOption = 'Grant'; //to translate

$strId = 'ID'; //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strImportFiles = 'Import files';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate

$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strLaTeX = 'LaTeX';  //to translate
$strLoginInformation = 'Login Information'; //to translate

$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_file = 'Filename';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strMySQLCharset = 'MySQL Charset';  //to translate

$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate
$strNotOK = 'not OK';  //to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';//to translate

$strOK = 'OK';  //to translate

$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPutColNames = 'Put fields names at first row';  //to translate

$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate

$strSQLOptions = 'SQL options';//to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';//to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate

$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate
$strTraffic = 'Traffic'; //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate

$strUseTextField = 'Use text field'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserOverview = 'User overview'; //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate

$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strWildcard = 'wildcard';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate

$strXML = 'XML';//to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate
$strCharset = 'Charset';  //to translate
$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strLoadMethod = 'LOAD method';  //to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strAddIntoComments = 'Add into comments';//to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTableOptions = 'Table options';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in config.inc.php and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strCharsets = 'Charsets';  //to translate
$strDescription = 'Description';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCollation = 'Collation';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strGerman = 'German';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strDictionary = 'dictionary';  //to translate
$strSwedish = 'Swedish';  //to translate
$strDanish = 'Danish';  //to translate
$strCzech = 'Czech';  //to translate
$strTurkish = 'Turkish';  //to translate
$strEnglish = 'English';  //to translate
$strHungarian = 'Hungarian';  //to translate
$strCroatian = 'Croatian';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strEstonian = 'Estonian';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strUkrainian = 'Ukrainian';  //to translate
$strHebrew = 'Hebrew';  //to translate
$strWestEuropean = 'West European';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strArmenian = 'Armenian';  //to translate
$strArabic = 'Arabic';  //to translate
$strRussian = 'Russian';  //to translate
$strUnknown = 'unknown';  //to translate
$strBaltic = 'Baltic';  //to translate
$strUnicode = 'Unicode';  //to translate
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strKorean = 'Korean';  //to translate
$strGreek = 'Greek';  //to translate
$strJapanese = 'Japanese';  //to translate
$strThai = 'Thai';  //to translate
$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strLogServer = 'Server';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
 = 'Cannot connect: invalid settings.';  //to translate
?>
