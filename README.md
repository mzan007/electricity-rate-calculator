# ⚡ Electricity Rate Calculator (PHP + Bootstrap 4)

This is a simple PHP application that calculates:

- Power in Wh (Watt-hours)
- Energy in kWh (kilowatt-hours)
- Total electricity charge per hour and per day

## 💻 Technologies Used

- Vanilla PHP
- Bootstrap 4 (for styling)

## 🧮 Formula Used

- **Power (Wh)** = Voltage (V) × Current (A)  
- **Energy (kWh)** = Power (Wh) ÷ 1000  
- **Total Charge** = Energy (kWh) × (Rate ÷ 100)

## 📥 How to Use

1. Clone the repository or download the ZIP.
2. Place the files in your PHP server directory (e.g., `htdocs` if you're using XAMPP).
3. Open `calculator.php` in your browser.
4. Enter the voltage, current, and current rate (in cents per kWh).
5. Click **Calculate** to see results per hour and per day.

## 📷 Screenshot

(Add a screenshot of your working calculator UI here if you want.)

## 📂 Files

- `calculator.php` – Main PHP logic and frontend
- `README.md` – Project documentation

## 📤 Deployment

You can upload this to any PHP-compatible hosting service or run it locally using tools like XAMPP, WAMP, or MAMP.

---

## ✅ Example Input

- Voltage: `240 V`
- Current: `5 A`
- Rate: `38` (sen per kWh)

### 💡 Output:

- Power: `1200 Wh`
- Energy/hour: `1.2000 kWh`
- Energy/day: `28.8000 kWh`
- Total/hour: `RM 0.4560`
- Total/day: `RM 10.9440`

---

## 🧑‍💻 Author

**Muhammad Al-Mizan Bin Zulkipli**  
Bachelor of Information System Management, UiTM Kelantan

---

