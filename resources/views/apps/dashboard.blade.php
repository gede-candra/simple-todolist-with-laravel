@extends('layouts.app')

@section('content')
    <h2 class="mt-3">Dashboard</h2>
    <hr>
    <div class="row g-3 mt-4">
        @if (auth()->user()->role == 'Admin')
        <div class="col-xl-3 col-sm-6 col-12 ">
            <div class="card border-danger text-danger shadow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5 21H5.6C5.03995 21 4.75992 21 4.54601 20.891C4.35785 20.7951 4.20487 20.6422 4.10899 20.454C4 20.2401 4 19.9601 4 19.4V17.6841C4 17.0485 4 16.7306 4.04798 16.4656C4.27087 15.2344 5.23442 14.2709 6.46558 14.048C6.5425 14.0341 6.6237 14.0242 6.71575 14.0172C6.94079 14 7.05331 13.9914 7.20361 14.0026C7.35983 14.0143 7.4472 14.0297 7.59797 14.0722C7.74302 14.1131 8.00429 14.2315 8.52682 14.4682C8.83795 14.6091 9.16326 14.7243 9.5 14.811M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM16.4976 16.2119C15.7978 15.4328 14.6309 15.2232 13.7541 15.9367C12.8774 16.6501 12.7539 17.843 13.4425 18.6868C13.8312 19.1632 14.7548 19.9983 15.4854 20.6353C15.8319 20.9374 16.0051 21.0885 16.2147 21.1503C16.3934 21.203 16.6018 21.203 16.7805 21.1503C16.9901 21.0885 17.1633 20.9374 17.5098 20.6353C18.2404 19.9983 19.164 19.1632 19.5527 18.6868C20.2413 17.843 20.1329 16.6426 19.2411 15.9367C18.3492 15.2307 17.1974 15.4328 16.4976 16.2119Z"
                                        stroke="#dc3545" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="text-end">
                                <h3>{{ $users }}</h3>
                                <span>User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-xl-3 col-sm-6 col-12 ">
            <div class="card border-danger text-danger shadow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#dc3545" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#dc3545" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 10C8.20914 10 10 8.20914 10 6C10 3.79086 8.20914 2 6 2C3.79086 2 2 3.79086 2 6C2 8.20914 3.79086 10 6 10Z" stroke="#dc3545" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 22C20.2091 22 22 20.2091 22 18C22 15.7909 20.2091 14 18 14C15.7909 14 14 15.7909 14 18C14 20.2091 15.7909 22 18 22Z" stroke="#dc3545" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="text-end">
                                <h3>{{ $todoCategories }}</h3>
                                <span>Kategori Todolist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 ">
            <div class="card border-danger text-danger shadow">
                <div class="card-content">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="16" y1="24" x2="38" y2="24" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="16" y1="34" x2="38" y2="34" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="16" y1="44" x2="38" y2="44" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="16" y1="54" x2="38" y2="54" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="12" y1="24" x2="8" y2="24" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="12" y1="34" x2="8" y2="34" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="12" y1="44" x2="8" y2="44" />
                                    <line fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" x1="12" y1="54" x2="8" y2="54" />
                                    <polyline fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" points="14,8 1,8 1,63 45,63 45,8 32,8 " />
                                    <polygon fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" points="27,5 27,1 19,1 19,5 15,5 13,13 33,13 31,5" />
                                    <polygon fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" points="63,3 63,53 59,61 55,53 55,3 " />
                                    <polyline fill="none" stroke="#dc3545" stroke-width="2" stroke-miterlimit="10" points="55,7 51,7 51,17 " />
                                </svg>
                            </div>
                            <div class="text-end">
                                <h3>{{ $todolist }}</h3>
                                <span>Todolist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
