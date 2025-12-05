@echo off
echo ====================================
echo Отправка изменений на GitHub...
echo ====================================
echo.

git add .
echo [OK] Файлы добавлены

git commit -m "Auto update %date% %time%"
echo [OK] Коммит создан

git push
echo [OK] Изменения отправлены на GitHub!

echo.
echo ====================================
echo Готово!
echo ====================================
pause
