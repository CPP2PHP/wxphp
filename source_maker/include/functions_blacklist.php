<?php

//Functions already defined by hand on wxwidgets.cpp
unset($defFunctions['wxEntry']);
unset($defFunctions['wxExecute']);
unset($defFunctions['wxAboutBox']);
unset($defFunctions['wxInitialize']);
unset($defFunctions['wxInitAllImageHandlers']);

//Other functions not working correctly at the moment
unset($defFunctions['wxGetApp']);
unset($defFunctions['wxCreatePersistentObject']);
unset($defFunctions['wxTransferFileToStream']);
unset($defFunctions['wxTransferStreamToFile']);
unset($defFunctions['wxStringCheck']);
unset($defFunctions['wxGenericAboutBox']);
unset($defFunctions['wxGetSingleChoiceData']);
unset($defFunctions['wxDDECleanUp']);
unset($defFunctions['wxDDEInitialize']);
unset($defFunctions['wxGetWorkingDirectory']);
unset($defFunctions['wxMakeMetafilePlaceable']);
unset($defFunctions['wxGetNumberFromUser']);
unset($defFunctions['wxGetDisplayName']);
unset($defFunctions['wxLoadUserResource']);
unset($defFunctions['wxPostDelete']);
unset($defFunctions['wxSetDisplayName']);
unset($defFunctions['wxGetEmailAddress']);
unset($defFunctions['wxGetHostName']);
unset($defFunctions['wxGetUserId']);
unset($defFunctions['wxGetUserName']);
unset($defFunctions['wxStrtod']);
unset($defFunctions['wxFileNameFromPath']);
unset($defFunctions['wxGetTempFileName']);
unset($defFunctions['wxStrtok']);
unset($defFunctions['wxGetEnv']);
?>
