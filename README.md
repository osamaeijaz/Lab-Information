# 🧪 Lab Information Management System (LIMS)

A **Lab Information Management System (LIMS)** project designed to manage laboratory operations efficiently.  
This system handles **patients, tests, samples, and reports**, making lab workflows easier and faster.  

---

## 📋 Features

### **1. Patient Management**
- Add and edit patient details  
- View complete patient history and previous reports  

### **2. Test Management**
- Add different lab tests (e.g., Blood Test, X-Ray, Urine Test)  
- Define test price, unit, and normal ranges  

### **3. Sample Management**
- Record sample collection  
- Assign sample numbers or barcodes for tracking  

### **4. Report Generation**
- Enter test results  
- Generate and print/download patient reports  

### **5. Admin & User Management**
- User login with roles: **Admin, Lab Technician, Receptionist**  
- Admin dashboard with real-time statistics (Patients, Tests, Pending Reports)  

---

## ⚡ Optional Advanced Features
- Online report sharing with patients via QR code or link  
- Billing and payment integration  
- Inventory management for lab reagents and kits  
- Appointment booking for patients  

---

## 🏗️ Project Structure (Suggested)
Lab-Information-System/
│
├── backend/ # Server-side code (API, DB)
├── frontend/ # UI built with React/HTML/Bootstrap
├── database/ # SQL files and migrations
├── reports/ # Generated patient reports
└── README.md # Project documentation

yaml
Copy
Edit

---

## 💾 Database Overview

**Main Tables:**
- `users` → (id, name, role, email, password)
- `patients` → (id, name, age, gender, contact)
- `tests` → (id, name, price, unit, normal_range)
- `samples` → (id, patient_id, test_id, sample_number, status)
- `results` → (id, sample_id, result_value, report_date)
- `invoices` *(optional)* → (id, patient_id, amount, paid_status)