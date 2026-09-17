<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <style>
        .profile-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            background: #f1f5f9;
            font-family: Arial, sans-serif;
        }

        .profile-card {
            width: 400px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .profile-header {
            text-align: center;
            padding: 35px 20px 30px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .profile-photo {
            width: 130px;
            height: 130px;
            margin: 0 auto 15px;
            padding: 5px;
            background: white;
            border-radius: 50%;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-header h2 {
            margin: 10px 0 5px;
            font-size: 25px;
        }

        .profile-header p {
            margin: 0;
            opacity: 0.85;
            font-size: 14px;
        }

        .profile-body {
            padding: 25px;
        }

        .info-box {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            margin-bottom: 15px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 15px;
            transition: 0.3s;
        }

        .info-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .info-icon {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ede9fe;
            border-radius: 12px;
            font-size: 21px;
        }

        .info-box span {
            display: block;
            color: #64748b;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .info-box strong {
            color: #1e293b;
            font-size: 17px;
        }
    </style>
</head>

<body>

    <div class="profile-wrapper">
        <div class="profile-card">

            <div class="profile-header">
                <div class="profile-photo">
                    <img src="https://i.pinimg.com/736x/8a/e9/e9/8ae9e92fa4e69967aa61bf2bda967b7b.jpg" alt="Foto Profil">
                </div>

                <h2>Profil Mahasiswa</h2>
                <p>Data Mahasiswa</p>
            </div>

            <div class="profile-body">

                <div class="info-box">
                    <div class="info-icon">👤</div>
                    <div>
                        <span>Nama</span>
                        <strong>{{ $nama }}</strong>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">🎓</div>
                    <div>
                        <span>Kelas</span>
                        <strong>{{ $kelas }}</strong>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">🆔</div>
                    <div>
                        <span>NPM</span>
                        <strong>{{ $NPM }}</strong>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html>