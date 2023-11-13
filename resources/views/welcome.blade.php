@extends('layouts.base')
@section('page.title', config('app.name'))
@section('content')
    <div class="bg-dark text-secondary px-4 py-5">
        <div class="py-5">
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4 text-white">Welcome to the <b>Moonlight-Media!</b> website, the project is under development and will be <b>launched in</b> the spring of <b>2024</b>. You can read more about the project in the our social networks.
                    <br><br>
                </p>

                <ul class="nav justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#telegram"></use></svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#vk"></use></svg></a></li>
                </ul>

            </div>
        </div>
    </div>
@endsection
