@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\proXAMPP\hypersonic\scripts\ctl.bat (start /MIN /B D:\proXAMPP\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\proXAMPP\ingres\scripts\ctl.bat (start /MIN /B D:\proXAMPP\ingres\scripts\ctl.bat START)
if exist D:\proXAMPP\mysql\scripts\ctl.bat (start /MIN /B D:\proXAMPP\mysql\scripts\ctl.bat START)
if exist D:\proXAMPP\postgresql\scripts\ctl.bat (start /MIN /B D:\proXAMPP\postgresql\scripts\ctl.bat START)
if exist D:\proXAMPP\apache\scripts\ctl.bat (start /MIN /B D:\proXAMPP\apache\scripts\ctl.bat START)
if exist D:\proXAMPP\openoffice\scripts\ctl.bat (start /MIN /B D:\proXAMPP\openoffice\scripts\ctl.bat START)
if exist D:\proXAMPP\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\proXAMPP\apache-tomcat\scripts\ctl.bat START)
if exist D:\proXAMPP\resin\scripts\ctl.bat (start /MIN /B D:\proXAMPP\resin\scripts\ctl.bat START)
if exist D:\proXAMPP\jetty\scripts\ctl.bat (start /MIN /B D:\proXAMPP\jetty\scripts\ctl.bat START)
if exist D:\proXAMPP\subversion\scripts\ctl.bat (start /MIN /B D:\proXAMPP\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\proXAMPP\lucene\scripts\ctl.bat (start /MIN /B D:\proXAMPP\lucene\scripts\ctl.bat START)
if exist D:\proXAMPP\third_application\scripts\ctl.bat (start /MIN /B D:\proXAMPP\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\proXAMPP\third_application\scripts\ctl.bat (start /MIN /B D:\proXAMPP\third_application\scripts\ctl.bat STOP)
if exist D:\proXAMPP\lucene\scripts\ctl.bat (start /MIN /B D:\proXAMPP\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\proXAMPP\subversion\scripts\ctl.bat (start /MIN /B D:\proXAMPP\subversion\scripts\ctl.bat STOP)
if exist D:\proXAMPP\jetty\scripts\ctl.bat (start /MIN /B D:\proXAMPP\jetty\scripts\ctl.bat STOP)
if exist D:\proXAMPP\hypersonic\scripts\ctl.bat (start /MIN /B D:\proXAMPP\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\proXAMPP\resin\scripts\ctl.bat (start /MIN /B D:\proXAMPP\resin\scripts\ctl.bat STOP)
if exist D:\proXAMPP\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\proXAMPP\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\proXAMPP\openoffice\scripts\ctl.bat (start /MIN /B D:\proXAMPP\openoffice\scripts\ctl.bat STOP)
if exist D:\proXAMPP\apache\scripts\ctl.bat (start /MIN /B D:\proXAMPP\apache\scripts\ctl.bat STOP)
if exist D:\proXAMPP\ingres\scripts\ctl.bat (start /MIN /B D:\proXAMPP\ingres\scripts\ctl.bat STOP)
if exist D:\proXAMPP\mysql\scripts\ctl.bat (start /MIN /B D:\proXAMPP\mysql\scripts\ctl.bat STOP)
if exist D:\proXAMPP\postgresql\scripts\ctl.bat (start /MIN /B D:\proXAMPP\postgresql\scripts\ctl.bat STOP)

:end

