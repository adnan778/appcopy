<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>info page</title>
</head>

<body>

    <div class="container">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5 image" width="150px" src="uimg/{{Auth()->user()->image}}">
                        <span class="font-weight-bold imgspan">{{$info->name}}</span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">User Profile</h4>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Name : {{$info->name}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Email : {{$info->email}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Phone : {{$info->phone}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Nationality : {{$info->nationality}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Country : {{$info->country}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Address : {{$info->address}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Date Of Birth : {{$info->date}}</div>
                        </div>
                        <div class="inforow row mt-3">
                            <div class="col-md-12">Age : {{$info->age}}</div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">

                            <a class="btn btn-warning btn-sm" href="{{route('home')}}"><i
                                    class="fa-solid fa-house"></i></a>

                        </div>

                        <div class="col-md-2">
                            <a class="btn btn-primary btn-sm" href="{{route('edit.info')}}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>

                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-info btn-sm" href="{{route('pdfmake')}}"><i
                                    class="fa-solid fa-download"></i></a>

                        </div>
                    </div>
                    <div class="row">
                        <h2>Education</h2>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Institute</th>
                                    <th scope="col">GPA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$info->exam}}</td>
                                    <td>{{$info->dec}}</td>
                                    <td>{{$info->gpa}}</td>
                                </tr>
                                <tr>
                                    <td>{{$info->examB}}</td>
                                    <td>{{$info->decB}}</td>
                                    <td>{{$info->gpaB}}</td>
                                </tr>
                                <tr>
                                    <td class="last_td">{{$info->examC}}</td>
                                    <td class="last_td">{{$info->decC}}</td>
                                    <td class="last_td">{{$info->gpaC}}</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <h2>Work Exparience</h2>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Company Reference</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$info->job1}}</td>
                                    <td>{{$info->work1}}</td>
                                </tr>
                                <tr>
                                    <td>{{$info->job2}}</td>
                                    <td>{{$info->work2}}</td>
                                </tr>
                                <tr>
                                    <td class="last_td">{{$info->job3}}</td>
                                    <td class="last_td">{{$info->work3}}</td>
                                </tr>


                            </tbody>
                        </table>

                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>