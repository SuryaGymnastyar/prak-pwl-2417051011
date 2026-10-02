<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #0d0f1d;
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            padding: 24px 16px;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 360px;
            background-color: #121528;
            padding: 40px 24px;
            border-radius: 36px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
            border: 1px solid rgba(255, 255, 255, 0.05);
            gap: 16px;
        }

        .profile-avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #e5a93b;
            box-shadow: 0 0 20px rgba(229, 169, 59, 0.25);
            margin-bottom: 12px;
        }

        .info-box {
            width: 100%;
            background-color: #1a1e36;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 4px;
            padding: 12px 20px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.04);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.25s ease;
        }

        .info-box:hover {
            background-color: #212644;
            border-color: rgba(229, 169, 59, 0.4);
            transform: translateY(-2px);
        }

        .info-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #e5a93b;
            font-weight: 500;
        }

        .info-value {
            font-size: 1rem;
            font-weight: 600;
            color: #f1f3f9;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <img class="profile-avatar" src="{{ asset('images/surya.jpeg') }}" alt="Profile Picture">

        <div class="info-box">
            <span class="info-label">Nama</span>
            <span class="info-value">{{ $nama }}</span>
        </div>

        <div class="info-box">
            <span class="info-label">Kelas</span>
            <span class="info-value">{{ $kelas }}</span>
        </div>

        <div class="info-box">
            <span class="info-label">NPM</span>
            <span class="info-value">{{ $npm }}</span>
        </div>
    </div>

</body>
</html>