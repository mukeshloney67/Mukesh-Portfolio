# 🌐 Personal Portfolio Website

This is a simple and responsive portfolio website built using **HTML**, **CSS**, **JavaScript**, and **PHP**. It features an interactive UI, project showcase, and a working contact form using **SMTP** for email delivery.

## 🚀 Tech Stack

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Email Service**: SMTP (e.g., PHPMailer)

## ✨ Features

- Responsive layout for mobile and desktop  
- Project and skills showcase  
- Contact form with SMTP email integration  
- Clean and minimal design

## 📁 Folder Structure

Ajax
CSS
inc
js
smtp
index.php


## 📬 Contact Form Setup

To enable the contact form:
1. Go to `/php/sendMail.php`
2. Configure your SMTP settings:
   ```php
   $mail->Host = 'smtp.example.com';
   $mail->Username = 'your@email.com';
   $mail->Password = 'your_email_password';
   $mail->Port = 587;
3. Test the form by submitting a message from the site.

📌 Usage
You can deploy this website on any standard LAMP/WAMP server. Make sure PHP is enabled for email functionality.
