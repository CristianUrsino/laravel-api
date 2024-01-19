@extends('layouts.app')

@section('content')

    <div id="dashboard">

        <header class="debug container-fluid">

            <div class="row align-items-center h-100 debug ">
                <figure class="debug col-2 col-sm-1 d-block d-lg-none "><img src="img/mobile-logo.png" alt="logo"></figure>
                <figure class="debug col-2 d-none d-lg-block"><img src="img/logo.svg" alt="logo"></figure>
                <div class="col-9 col-sm-10 col-lg-9 px-3">
                    <div class="input-group flex-nowrap ">
                        <span class="input-group-text bg-gray border-none" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control bg-gray" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div  class="col-1">
                    <i class="fa-solid fa-magnifying-glass d-lg-inline-block d-none"></i>
                    <i class="fa-solid fa-magnifying-glass d-lg-inline-block d-none"></i>
                    <i class="fa-solid fa-magnifying-glass d-lg-inline-block d-none"></i>
                    <div class="dropdown d-inline">
                        <button id="header-dropdown" type="button" data-bs-toggle="dropdown"><i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <main class="debug">

            
            <div id="sidebar" class="debug text-white  d-flex flex-column justify-content-between h-100">
                <div>
                    <div class="d-lg-px-5 mx-2 my-2 px-3 py-2 text-nowrap">
                        <i class="fa-solid fa-magnifying-glass"></i> <span class="d-lg-inline-block d-none pe-3">Home</span>
                    </div>
                    <div class="d-lg-px-5 mx-2 my-2 px-3 py-2">
                        <i class="fa-solid fa-magnifying-glass"></i> <span class="d-lg-inline-block d-none pe-3">Home</span>
                    </div>
                    <div class="d-lg-px-5 mx-2 my-2 px-3 py-2">
                        <i class="fa-solid fa-magnifying-glass"></i> <span class="d-lg-inline-block d-none pe-3">Home</span>
                    </div>
                </div>
                <div>
                    <div class="d-lg-px-5 mx-2 my-2 px-3 py-2">
                        <i class="fa-solid fa-magnifying-glass"></i> <span class="d-lg-inline-block d-none pe-3">Home</span>
                    </div>
                </div>
            </div>


            <div id="main-content" class="debug">
                <!-- ----------------MAIN NAV-------------- -->
                <section id="main-nav" class="bg-primary text-white py-3 container-fluid">
                    <div class="row debug">
                        <div class="debug col-12 col-sm-6">
                            <div class="d-flex align-items-center">
                                <h2>Boolean</h2>
                                <button type="button" class="my-btn ms-2">Lorem, ipsum.</button>
                            </div>
                            <div>
                                <button type="button" class="my-btn me-1">Lorem.</button>
                                <i class="fa-solid fa-magnifying-glass pe-1"></i>
                                <button type="button" class="my-btn circle d-lg-none d-inline-block me-1">+</button>
                                <button type="button" class="my-btn d-lg-inline-block d-none me-1">Lorem, ipsum.</button>
                                <button type="button" class="my-btn d-lg-inline-block d-none me-1">Lorem. ipsum.</button>
                                <button type="button" class="my-btn d-lg-inline-block d-none me-1">Lorem, ipsum</button>
                            </div>
                        </div>
                        <div class="debug col-12 col-sm-3">
                            <div>Lorem ipsum dolor sit amet consectetur.</div>
                            <h2>125</h2>
                        </div>
                        <div class="debug col-12 col-sm-3">
                            <span>Lorem, ipsum.</span>
                            <button class="my-btn-square text-white border-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">+</button>
                            <!-- -----------OFFCANVAS---------  -->
                            <div class="offcanvas offcanvas-end " data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                <div class="offcanvas-header">
                                    <div>Lorem ipsum dolor sit amet.</div>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class=" container-fluid">
                                    <form action="#">
                                        <div class="row wrap debug">
                                            <div class="mb-3 col-12 col-sm-6">
                                                <label for="input_nome" class="form-label">nome</label>
                                                <input type="text" id="input_nome" class="form-control" value="">
                                            </div>
                                            <div class="mb-3 col-12 col-sm-6">
                                                <label for="input_cognome" class="form-label">cognome</label>
                                                <input type="text" class="form-control" id="input_cognome" value="">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label for="email" class="form-label">email</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                    <input type="text" id="email" class="form-control" placeholder="" aria-label="Email" value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label for="inputPassword5" class="form-label">Password</label>
                                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label for="c-email" class="form-label">conferma email</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                    <input type="text" id="c-email" class="form-control" placeholder="" aria-label="Email" value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label for="c-inputPassword5" class="form-label">conferma Password</label>
                                                <input type="password" id="c-inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="input_ind" class="form-label">indirizzo</label>
                                                <input type="text" id="input_ind" class="form-control" value="">
                                            </div>
                                            <div class="mb-3 col-12 col-sm-6">
                                                <label for="input_citta" class="form-label">città</label>
                                                <input type="text" id="input_citta" class="form-control" value="">
                                            </div>
                                            <div class="mb-3 col-12 col-sm-4">
                                                <label for="stato" class="form-label">stato</label>
                                                <select class="form-select" aria-label="stato" id="stato">
                                                    <option selected>scegli...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                            <div class="mb-3 col-12 col-sm-2">
                                                <label for="input_cap" class="form-label">cap</label>
                                                <input type="text" id="input_cap" class="form-control" value="">
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="formFile" class="form-label">foto</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="mb-3 form-check ms-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary d-inline-block">lorem</button>
                                        <button type="reset" class="btn btn-warning">lorem</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container-fluid">

                    <div id="dashbord" class="row">

                        <div id="dash-left" class="col-12 col-lg-8 debug p-2">
                            <!-- ---------------SECTION 1----------------- -->
                            <div id="prossime-classi" class="border rounded mb-4">
                                <h2 class="border-bottom ps-2 pb-3">Lorem, ipsum.</h2>
                                <div>
                                    <table class="table table-hover mb-3">
                                        <thead>
                                          <tr>
                                            <th scope="col">nome</th>
                                            <th scope="col" class="d-sm-table-cell d-none">data inizio</th>
                                            <th scope="col" class="d-sm-table-cell d-none">ROI</th>
                                            <th scope="col">stato</th>
                                            <th scope="col">azioni</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-yellow">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-red">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-green">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-green">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-green">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-green">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-green">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                          <tr>
                                            <td><i class="fa-solid fa-code circle"></i> classe 75</td>
                                            <td class="d-sm-table-cell d-none">Lorem, ipsum.</td>
                                            <td class="d-sm-table-cell d-none">20%</td>
                                            <td><button class="my-btn bg-green">done</button></td>
                                            <td><button class="my-btn-square"><i class="fa-solid fa-pen"></i></button><button class="my-btn-square "><i class="fa-solid fa-pen"></i></button></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>


                            <!-- ----------------SECTION 2--------------- -->
                            <div class="border rounded mb-4">
                                <h2 class="ps-2 border-bottom pb-3">F.A.Q</h2>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item border-0 mx-3">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Lorem ipsum dolor sit amet consectetur.
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magnam, corrupti, maiores quo unde quasi culpa, deserunt nostrum commodi praesentium error beatae eveniet ullam officia repellendus deleniti animi delectus quidem laboriosam laudantium aliquam ipsum molestias. Enim magni hic tempora esse libero, reiciendis veniam, voluptates a voluptatum obcaecati, maiores laboriosam. Qui consequatur mollitia accusantium nulla esse modi repudiandae provident possimus molestiae in incidunt eveniet sit laboriosam maiores, amet labore ea asperiores.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item border-0 mx-3">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Lorem ipsum dolor sit amet.
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti nesciunt dolorem, accusamus ratione, ut culpa libero deserunt qui similique sunt non eos labore, sequi iste nam repudiandae minus exercitationem. Illo saepe molestias expedita error porro sint unde facilis quod, sit, at omnis similique a veritatis, et iure debitis vel delectus enim quisquam. Numquam ipsa voluptas repellendus animi reiciendis, voluptates, nobis dolorem quia reprehenderit minus quam! Nobis provident non cum! Sapiente!
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item border-0 mx-3">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maxime corrupti velit harum, porro atque est hic ipsam voluptatibus. Amet eum dolor ut quos, iusto ex laudantium, eius possimus assumenda nemo fugit libero excepturi maxime dolore nihil animi veniam hic molestiae omnis! Et molestias quis magni aperiam est iure ut, repudiandae earum vitae placeat libero quaerat veniam impedit accusamus maiores sed id consequuntur hic labore itaque. Placeat voluptatum eum minus?
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>


                        </div>

                        <div id="dash-right" class="col-12 col-lg-4 debug p-2">
                            <!-- ----------------SECTION 3---------------- -->
                            <div class="border rounded mb-4">
                                <h2 class="ps-2 border-bottom pb-3">Todo</h2>
                                <div class="m-3 border rounded">
                                    <div class="p-2 border-bottom">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                        <label class="form-check-label" for="exampleCheck1">Lorem ipsum dolor sit amet.</label>
                                    </div>
                                    <div class="p-2 border-bottom">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                        <label class="form-check-label" for="exampleCheck1">Lorem ipsum dolor sit amet.</label>
                                    </div>
                                    <div class="p-2 border-bottom">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                        <label class="form-check-label" for="exampleCheck1">Lorem ipsum dolor sit amet.</label>
                                    </div>
                                </div>
                            </div>
                            <!-- -----------------SECTION 4---------------- -->
                            <div class="border rounded mb-4">
                                <div class="border rounded mb-4">
                                    <div class="m-3 p-3 border rounded">
                                        <figure><img src="img/stats.jpeg" alt="stats"></figure>
                                        <h3>Lorem, ipsum.</h3>
                                        <div class="pb-3 border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                        <div class="py-2 border-bottom">Lorem ipsum dolor.</div>
                                        <div class="py-2 border-bottom">Lorem ipsum dolor.</div>
                                        <div class="py-3"><a href="#">Lorem ipsum dolor.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

        </main>


    </div>

@endsection
