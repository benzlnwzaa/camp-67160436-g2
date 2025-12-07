<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มใบสมัคร</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>แบบฟอร์มใบสมัคร</h2>
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="firstname">ชื่อ:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">สกุล:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="dob">วันเดือนปีเกิด:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>เพศ:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">ชาย</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">หญิง</label>
                    
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">อื่น ๆ</label>
                </div>
            </div>

            <div class="form-group">
                <label for="profile_picture">รูป:</label>
                <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="address">ที่อยู่:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="fav_color">สีที่ชอบ:</label>
                <input type="color" id="fav_color" name="fav_color" value="#007bff">
            </div>

            <div class="form-group">
                <label for="fav_genre">แนวเพลงที่ชอบ:</label>
                <select id="fav_genre" name="fav_genre" required>
                    <option value="" disabled selected>เลือกแนวเพลง</option>
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="jazz">Jazz</option>
                    <option value="hiphop">Hip Hop</option>
                    <option value="thai_folk">เพลงลูกทุ่ง/เพื่อชีวิต</option>
                </select>
            </div>

            <div class="form-group checkbox-group">
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">ข้าพเจ้ายินยอมให้ใช้ข้อมูลเพื่อการสมัครนี้</label>
            </div>

            <div class="button-group">
                <button type="reset" class="btn reset">Reset</button>
                <button type="submit" class="btn submit">บันทึก</button>
            </div>
            
        </form>
    </div>
</body>
</html>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7f6;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.form-container {
    background-color: #ffffff;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 25px;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="date"],
input[type="color"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* เพื่อให้ padding ไม่ขยายความกว้างเกิน */
}

input[type="file"] {
    padding: 5px 0;
}

textarea {
    resize: vertical;
}

.radio-group label {
    display: inline-block;
    font-weight: normal;
    margin-right: 20px;
    cursor: pointer;
}

.radio-group input[type="radio"] {
    margin-right: 5px;
    width: auto;
}

.checkbox-group {
    margin-top: 20px;
}

.checkbox-group input[type="checkbox"] {
    width: auto;
    margin-right: 10px;
    transform: scale(1.2);
}

.checkbox-group label {
    display: inline;
    font-weight: normal;
    color: #333;
}

.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
    flex-grow: 1; /* ทำให้ปุ่มขยายเต็มพื้นที่ */
    margin: 0 5px;
}

.reset {
    background-color: #f44336;
    color: white;
}

.reset:hover {
    background-color: #d32f2f;
}

.submit {
    background-color: #007bff;
    color: white;
}

.submit:hover {
    background-color: #0056b3;
}