@extends('layouts.user.app')
@section('contents')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{asset('user/assets/img/hero/h1_hero.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Find your <span>Next photo!</span> </h1>
                                <p>Pilih Paket Favoritmu</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- form -->
                            <form action="#" class="search-box">
                                <div class="input-form mb-30">
                                    <input type="text" placeholder="Pilih Paket Favoritmu?">
                                </div>
                                <div class="select-form mb-30">
                                    <div class="select-itms">
                                        <select name="paket" id="select1">
                                            <option value="">Pilih Paket</option>
                                            @foreach ($data as $paket)
                                            <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form mb-30">
                                    <a href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>8000+ Our Local<br>Guides</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>100% Trusted Tour<br>Agency</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>28+ Years of Travel<br>Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>98% Our Travelers<br>are Happy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Favourite Places Start -->
    <div class="favourite-place place-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED PHOTO Packages</span>
                        <h2>The Package</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $product)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="card card-product card-body p-lg-4 p3">
                            <img src="{{ asset('images/' . $product->gambar) }}" alt="" class="img-fluid">
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                <h3><a href="#" data-bs-target="#exampleModalToggle{{$product->id_produk}}" data-bs-toggle="modal">{{$product->nama_paket}}</a></h3>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li><i class="far fa-clock"></i>{{$product->slot}} Available</li>
                                    <li><i class="fas fa-map-marker-alt"></i>SOS GACA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalToggle{{$product->id_produk}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel{{$product->id_produk}}" tabindex="-1" style="overflow-y: auto;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel{{$product->id_produk}}">Select Service Extra</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex flex-column mb-3">
                                    <table>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="service{{$product->id_produk}}" value="{{$service->harga}}" onchange="calculateSubtotal({{$product->id_produk}})">
                                                    {{$service->nama_service}} - {{$service->harga}}
                                                </td>
                                                <td>
                                                    <input type="number" name="qty{{$product->id_produk}}" value="1" min="1" max="10" onchange="calculateSubtotal({{$product->id_produk}})">
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <div class="d-flex flex-column mb-3">
                                        <h6 class="mb-2">Selected Items</h6>
                                        <table id="selectedItemsTable{{$product->id_produk}}" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Layanan</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Item yang dipilih akan ditampilkan di sini -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <h6 class="mb-2">SUMMARY</h6>
                                    <div class="d-flex justify-content-between">
                                        <span id="productName{{$product->id_produk}}">{{$product->nama_paket}}</span>
                                        <span id="productPrice{{$product->id_produk}}">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <strong>Total Price</strong>
                                        <span id="subtotalPrice{{$product->id_produk}}">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2{{$product->id_produk}}" data-bs-toggle="modal" onclick="copySummaryToNextModal({{$product->id_produk}})">NEXT STEPS</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2{{$product->id_produk}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2{{$product->id_produk}}" tabindex="-1" style="overflow-y: auto;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2{{$product->id_produk}}">Isi Form Reservasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="reservasi" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No. HP</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <select class="form-select" id="waktu" name="waktu" required>
                                            @foreach($times as $time)
                                            <option value="{{$time->waktu}}">{{$time->waktu}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtotal{{$product->id_produk}}">Subtotal</label>
                                        <input type="text" class="form-control" name="subtotal" id="subtotal{{$product->id_produk}}" value="Rp0" readonly>
                                    </div>



                                    <!-- Di dalam modal kedua -->
                                    <div class="form-group">
                                        <table id="selectedItemsTable2{{$product->id_produk}}" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Layanan</th>
                                                    <th>Kuantitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Baris tabel akan ditambahkan secara dinamis di sini -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Di dalam modal kedua -->
                                    <div class="form-group">
                                        <h6 class="mb-2">SUMMARY</h6>
                                        <div class="d-flex justify-content-between">
                                            <input type="text" class="form-control" name="nama_paket" id="nama_paket{{$product->id_produk}}" value="nama_paket" style="border: none; background: transparent; padding: 0; margin: 0;" readonly>
                                            <span id="productPrice2{{$product->id_produk}}"></span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <strong>Total Price</strong>
                                            <span id="subtotalPrice2{{$product->id_produk}}"></span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle{{$product->id_produk}}" data-bs-toggle="modal">Back</button>
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- kene -->
</main>
@endsection

<script>
    // Mendapatkan tanggal hari ini
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;

    // Menetapkan tanggal minimum ke input tanggal
    document.getElementById("tanggal").setAttribute("min", today);
</script>

<script>
    function calculateSubtotal(id_produk) {
        var checkboxes = document.getElementsByName("service" + id_produk);
        var subtotal = parseFloat(document.getElementById("productPrice" + id_produk).textContent.replace("Rp", "").replace(".", ""));

        var selectedItems = [];

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                var price = parseFloat(checkboxes[i].value);
                var qty = parseFloat(document.getElementsByName("qty" + id_produk)[i].value);
                subtotal += price * qty;

                var serviceName = checkboxes[i].parentNode.textContent.trim().split("-")[0].trim();
                selectedItems.push({
                    name: serviceName,
                    qty: qty
                });
            }
        }

        document.getElementById("subtotalPrice" + id_produk).textContent = "Rp" + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        // Memperbarui subtotal keseluruhan
        document.getElementById("subtotal" + id_produk).value = "Rp" + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');

        var selectedItemsTable = document.getElementById("selectedItemsTable" + id_produk).getElementsByTagName("tbody")[0];
        selectedItemsTable.innerHTML = "";

        selectedItems.forEach(function(item) {
            var row = selectedItemsTable.insertRow();
            var nameCell = row.insertCell(0);
            var qtyCell = row.insertCell(1);

            nameCell.textContent = item.name;
            qtyCell.textContent = item.qty;
        });
    }
</script>

<script>
    function copySummaryToNextModal(id_produk) {
        // var productName = document.getElementById("productName" + id_produk).textContent;
        // document.getElementById("productName2" + id_produk).value = productName;


        var productName = document.getElementById("productName" + id_produk).textContent;
        document.getElementById("nama_paket" + id_produk).value = productName;

        var productPrice = document.getElementById("productPrice" + id_produk).textContent;
        document.getElementById("productPrice2" + id_produk).textContent = "Price: " + productPrice;

        var subtotalPrice = document.getElementById("subtotalPrice" + id_produk).textContent;
        document.getElementById("subtotalPrice2" + id_produk).textContent = "Total Price: " + subtotalPrice;

        var selectedItemsTable = document.getElementById("selectedItemsTable" + id_produk).getElementsByTagName("tbody")[0];
        var selectedItemsTable2 = document.getElementById("selectedItemsTable2" + id_produk).getElementsByTagName("tbody")[0];
        selectedItemsTable2.innerHTML = "";

        for (var i = 0; i < selectedItemsTable.rows.length; i++) {
            var newRow = selectedItemsTable2.insertRow();
            var nameCell = newRow.insertCell(0);
            var qtyCell = newRow.insertCell(1);

            nameCell.textContent = selectedItemsTable.rows[i].cells[0].textContent;
            qtyCell.textContent = selectedItemsTable.rows[i].cells[1].textContent;
        }
    }
</script>