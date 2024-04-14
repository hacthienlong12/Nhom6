@echo off
CHCP 1258 >nul 2>&1
CHCP 65001 >nul 2>&1
Title Tạo File Nhóm 6
pushd %~dp0
rem tạo
md C:\xampp\htdocs\QuanLySanPham
md C:\xampp\htdocs\QuanLySanPham\img
md C:\xampp\htdocs\QuanLySanPham\php
md C:\xampp\htdocs\QuanLySanPham\other
echo >C:\xampp\htdocs\QuanLySanPham\php\dangki.php
echo >C:\xampp\htdocs\QuanLySanPham\php\dangnhap.php
echo >C:\xampp\htdocs\QuanLySanPham\php\dangxuat.php
echo >C:\xampp\htdocs\QuanLySanPham\php\danhgia.php
echo >C:\xampp\htdocs\QuanLySanPham\php\hienthisanpham.php
echo >C:\xampp\htdocs\QuanLySanPham\php\hienthisanphamquanly.php
echo >C:\xampp\htdocs\QuanLySanPham\php\kiemtraketnoi.php
echo >C:\xampp\htdocs\QuanLySanPham\php\kiemtratentaikhoan.php
echo >C:\xampp\htdocs\QuanLySanPham\php\suasanpham.php
echo >C:\xampp\htdocs\QuanLySanPham\php\themsanpham.php
echo >C:\xampp\htdocs\QuanLySanPham\php\thongtinquanly.php
echo >C:\xampp\htdocs\QuanLySanPham\php\xoasanpham.php
echo >C:\xampp\htdocs\QuanLySanPham\kiemtraketnoi.php
:--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
cls
explorer C:\xampp\htdocs
set /p "pause=Nhấn enter để tiếp tục"
exit