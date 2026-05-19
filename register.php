<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
    * { box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    
    body {
        background: linear-gradient(135deg, #ffd6e7, #fff0f6);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
             margin: 0;
        padding: 20px;
    }

    .container {
        background: white;
        padding: 40px;
        width: 720px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    h2 { 
        text-align: center; 
        color: #ff4fa3; 
        margin-top: 0; 
        margin-bottom: 30px;
        font-size: 28px;
        font-weight: 600;
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }

    .full-width { grid-column: span 2; }

    label { 
        font-size: 15px; 
        font-weight: 600; 
        color: #444; 
        display: block; 
        margin-bottom: 8px;  }

    input[type="text"], 
    input[type="email"], 
    input[type="password"], 
    select, 
    textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #f0f0f0;
        border-radius: 10px;
        font-size: 15px;
        transition: 0.3s;
        background-color: #fafafa;
    }

    input:focus, select:focus, textarea:focus {
        outline: none;
        border-color: #ff4fa3;
        background-color: #fff;
    }

    textarea { height: 90px; resize: vertical; }
    
    .selection-box {
        background: #fff9fb;
        padding: 12px;
        border-radius: 10px;
        border: 1px dashed #ffd6e7;
    }

    .option-row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 5px;
    }
    .option { 
        display: flex; 
        align-items: center; 
        gap: 8px; 
        font-size: 14px;
        cursor: pointer;
    }

    input[type="radio"], input[type="checkbox"] {
        accent-color: #ff4fa3;
        transform: scale(1.1);
    }
    
    button {
        width: 100%;
        padding: 16px;
        border: none;
        border-radius: 12px;
        background: #ff4fa3;
        color: white;
        font-weight: 600;
        font-size: 17px;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 10px;
        box-shadow: 0 4px 15px rgba(255, 79, 163, 0.3);
    }

    button:hover { 
        background: #ff2f92; 
        transform: translateY(-2px);
    }
</style>
</head>
<body>

<div class="container">
    <h2>User Registration</h2>
    
    <form action="process.php" method="POST">
        <div class="form-grid">
            
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" placeholder="Abeba Desalegn" required>
            </div>
            
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="abeba@example.com" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Minimum 6 characters" required>
            </div>

            <div class="form-group">
                <label>Country</label>
                <select name="country" required>
                    <option value="">Select your country</option>
                    <option>Ethiopia</option>
                    <option>Eritrea</option>
                    <option>Djibouti</option>
                    <option>Uganda</option>
                    <option>Madagascar</option>
                </select>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <div class="selection-box">
                    <div class="option-row">
                        <label class="option"><input type="radio" name="gender" value="Female" required> Female</label>
                        <label class="option"><input type="radio" name="gender" value="Male"> Male</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Hobbies</label>
                <div class="selection-box">
                    <div class="option-row">
                        <label class="option"><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                        <label class="option"><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
                        <label class="option"><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
                    </div>
                </div>
            </div>

            <div class="full-width">
                <label>Comment</label>
                <textarea name="comment" placeholder="Any comments?"></textarea>
            </div>

            <div class="full-width">
                <button type="submit">Register</button>
            </div>

        </div>
    </form>
</div>

</body>
</html>