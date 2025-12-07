<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มใบสมัครสุดพิเศษ</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow-x: hidden;
            position: relative;
        }

        /* พื้นหลังอนิเมชั่นฟองสบู่ */
        .bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 15s infinite;
            pointer-events: none;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.3;
            }
            25% {
                transform: translateY(-100px) translateX(50px) scale(1.1);
                opacity: 0.5;
            }
            50% {
                transform: translateY(-200px) translateX(-30px) scale(0.9);
                opacity: 0.7;
            }
            75% {
                transform: translateY(-100px) translateX(-50px) scale(1.05);
                opacity: 0.4;
            }
        }

        /* สร้างอนิเมชั่นประกาย */
        .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            animation: sparkle 3s infinite;
            pointer-events: none;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 40px 50px;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(255, 105, 180, 0.4),
                        0 0 0 1px rgba(255, 255, 255, 0.3);
            width: 100%;
            max-width: 650px;
            animation: slideIn 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            z-index: 10;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-100px) scale(0.8);
                opacity: 0;
            }
            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        h2 {
            text-align: center;
            background: linear-gradient(135deg, #ff6ec4, #ff1493, #ff69b4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 35px;
            font-size: 2.5em;
            font-weight: 700;
            animation: titleGlow 3s ease-in-out infinite;
            position: relative;
        }

        @keyframes titleGlow {
            0%, 100% {
                filter: drop-shadow(0 0 5px rgba(255, 20, 147, 0.5));
            }
            50% {
                filter: drop-shadow(0 0 20px rgba(255, 105, 180, 0.8));
            }
        }

        h2::after {
            content: '✨';
            position: absolute;
            right: -30px;
            animation: rotate 2s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .form-group {
            margin-bottom: 25px;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }
        .form-group:nth-child(6) { animation-delay: 0.6s; }
        .form-group:nth-child(7) { animation-delay: 0.7s; }
        .form-group:nth-child(8) { animation-delay: 0.8s; }
        .form-group:nth-child(9) { animation-delay: 0.9s; }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #d946ef;
            font-size: 1.1em;
            text-shadow: 0 2px 4px rgba(217, 70, 239, 0.1);
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="file"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #ffc0cb;
            border-radius: 15px;
            font-size: 1em;
            font-family: 'Kanit', sans-serif;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            background: white;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #ff1493;
            box-shadow: 0 0 0 4px rgba(255, 20, 147, 0.1),
                        0 8px 20px rgba(255, 105, 180, 0.3);
            outline: none;
            transform: translateY(-2px);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .radio-group {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .radio-group input[type="radio"] {
            display: none;
        }

        .radio-group label {
            padding: 10px 20px;
            border: 2px solid #ffc0cb;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 400;
            background: white;
        }

        .radio-group input[type="radio"]:checked + label {
            background: linear-gradient(135deg, #ff6ec4, #ff1493);
            color: white;
            border-color: #ff1493;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.4);
        }

        .radio-group label:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.3);
        }

        .form-group input[type="color"] {
            height: 60px;
            width: 120px;
            border: 3px solid #ffc0cb;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-group input[type="color"]:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 8px 20px rgba(255, 105, 180, 0.4);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: linear-gradient(135deg, #fff0f5, #ffe4e9);
            border-radius: 15px;
            border: 2px solid #ffc0cb;
            transition: all 0.3s ease;
        }

        .checkbox-group:hover {
            box-shadow: 0 5px 15px rgba(255, 105, 180, 0.2);
            transform: translateX(5px);
        }

        .checkbox-group input[type="checkbox"] {
            width: 24px;
            height: 24px;
            cursor: pointer;
            accent-color: #ff1493;
        }

        .checkbox-group label {
            margin: 0;
            color: #c71585;
            font-weight: 400;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin-top: 35px;
        }

        .btn {
            padding: 14px 35px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: 600;
            font-family: 'Kanit', sans-serif;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn span {
            position: relative;
            z-index: 1;
        }

        .btn.reset {
            background: linear-gradient(135deg, #ff6b9d, #c71585);
            color: white;
            box-shadow: 0 5px 20px rgba(199, 21, 133, 0.4);
        }

        .btn.reset:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(199, 21, 133, 0.6);
        }

        .btn.submit {
            background: linear-gradient(135deg, #ff1493, #ff69b4);
            color: white;
            box-shadow: 0 5px 20px rgba(255, 20, 147, 0.4);
        }

        .btn.submit:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 20, 147, 0.6);
        }

        .btn:active {
            transform: translateY(-1px) scale(0.98);
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 30px 25px;
                border-radius: 20px;
            }

            h2 {
                font-size: 2em;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- สร้างฟองสบู่และประกายพื้นหลัง -->
    <script>
        // สร้างฟองสบู่
        for (let i = 0; i < 15; i++) {
            const bubble = document.createElement('div');
            bubble.className = 'bubble';
            bubble.style.width = Math.random() * 100 + 50 + 'px';
            bubble.style.height = bubble.style.width;
            bubble.style.left = Math.random() * 100 + '%';
            bubble.style.top = Math.random() * 100 + '%';
            bubble.style.animationDelay = Math.random() * 5 + 's';
            bubble.style.animationDuration = Math.random() * 10 + 10 + 's';
            document.body.appendChild(bubble);
        }

        // สร้างประกาย
        for (let i = 0; i < 30; i++) {
            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle';
            sparkle.style.left = Math.random() * 100 + '%';
            sparkle.style.top = Math.random() * 100 + '%';
            sparkle.style.animationDelay = Math.random() * 3 + 's';
            document.body.appendChild(sparkle);
        }
    </script>

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
                <input type="color" id="fav_color" name="fav_color" value="#ff69b4">
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
                <button type="reset" class="btn reset"><span>Reset</span></button>
                <button type="submit" class="btn submit"><span>บันทึก</span></button>
            </div>
            
        </form>
    </div>
</body>
</html>