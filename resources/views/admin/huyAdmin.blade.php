<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        h1 {
            font-size: 16px;
        }

        th {
            font-weight: 500;
        }

        textarea {
            width: 80%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
            margin-left: 120px;
        }

        .lydo {
            border: none;
            margin-left: 550px;
            width: 90px;
            text-align: center;
            text-transform: capitalize;
            height: auto;
            background-color: #DDDDDD;
            border-radius: 5px;
            box-shadow: 2px 2px #F5F5F5;
            -webkit-transition: background-color 2s ease-out;
            -moz-transition: background-color 2s ease-out;
            -o-transition: background-color 2s ease-out;
            transition: background-color 2s ease-out
        }

        .lydo:hover {
            transition: cubic-bezier(0.6, 0.04, 0.98, 0.335);
            background-color: #9c9494;
        }

        /* css qlphong */
        .title-admin {
            button {
                font-size: 10px;
            }

            /* end */

            /* css qlthongtin */
            .tttk>h1 {
                font-size: 16px;
            }

            th {
                font-weight: 500;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="timetable mt-5">
            <form action="{{ route('qldatphong.update', ['qldatphong' => $booking->id_booking]) }}" method="POST">
                @csrf {{method_field('PUT')}}
                <textarea placeholder="Vui lòng nhập lý do" name="ghi_chu_admin"></textarea>
                <button type="submit" class="btn btn-secondary" style="width: 80%; margin-left: 120px">Xác nhận</button>
            </form>
        </div>
    </main>
</body>
</html>