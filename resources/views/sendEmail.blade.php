<!DOCTYPE html>
<html>

<head>
    <title>Email</title>
    <script src="https://kit.fontawesome.com/a6c5beee0a.js" crossorigin="anonymous"></script>
</head>

<body style="margin-top: 8px;">

    <main style="margin-top: 8px;">
        <div style="background-color: white; padding: 20px;">
            <div style="border: 1px solid #606060; margin-left: 20px; margin-right: 20px; border-radius: 8px;">
                <div
                    style="display: flex; justify-content: center; padding-top: 5px; padding-bottom: 5px; background-color: #111827; border-start-end-radius: 8px; border-start-start-radius: 8px;">
                    <img src="https://jasawebsite.biz/wp-content/uploads/2021/08/New-Project.png" width="180"
                        alt="">
                </div>
                <div style="padding: 10px;">
                    <h2 style="margin: 0; color: black;">Hi Jasawebsite.biz</h2>
                    <h2
                        style="font-weight: 800; text-transform: capitalize; font-size: 1.5rem; color: black; line-height:2px">
                        Saya
                        <span style="font-size: 1.5rem;">{{ $data['name'] }}</span>,
                        mengirim pesan untuk anda
                    </h2>
                    <textarea style="width: 100%; margin-top: 3px; border-radius: 8px;" cols="30" rows="10" disabled> {{ $data['message'] }}</textarea>
                    <div style="display: flex;">
                        <h2 style="align-self: center; margin-right: 3px; color: black;">Balas pesan saya ke</h2>
                        <a href="wa.me/{{ $data['email'] }}" style="text-decoration: none;">
                            <div
                                style="padding-left: 2px; padding-right:2px; border-radius: 24px; background-color: #16a34a
                                ;">
                                <div
                                    style="color: white;gap: 0.75rem; padding-left: 0.75rem; padding-right: 0.75rem; align-items: center">
                                    <h2 style="flex-auto;">{{ $data['email'] }}
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>


</html>
