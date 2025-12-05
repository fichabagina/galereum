@echo off
chcp 65001 >nul
echo ====================================
echo Отправка изменений на GitHub...
echo ====================================
echo.

set /p message="Введи описание изменений: "

git add .
echo [OK] Файлы добавлены

git commit -m "%message%"
echo [OK] Коммит создан

git push
echo [OK] Изменения отправлены на GitHub!

echo.
echo ====================================
echo Готово!
echo ====================================
pause
