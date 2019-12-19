@echo off
title TWAMP CLI in %~n0
set TWAMPROOT=%~dp0
set SYSPATH=%PATH%;
set CLIPATH=%TWAMPROOT%ap\%~n0;%TWAMPROOT%bin;%TWAMPROOT%ap\mariadb\bin
set PATH=%CLIPATH%;%SYSPATH%
set PHPROOT=%TWAMPROOT%ap\%~n0
CMD /E:ON /K "set prompt=[%computername%] $p$_$_$+$g && php -v"
