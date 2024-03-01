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
                                            <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option> <!-- Sesuaikan dengan atribut dari model Paket -->
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
                                <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button> -->
                                <h3><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">{{$product->nama_paket}}</a></h3>
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

                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="overflow-y: auto;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Select Service Extra</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex flex-column mb-3">
                                    <table>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="service" value="{{$service->harga}}" onchange="calculateSubtotal()">
                                                    {{$service->nama_service}} - {{$service->harga}}
                                                </td>
                                                <td>
                                                    <input type="number" name="qty" value="1" min="1" max="10" onchange="calculateSubtotal(this)">
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-column mb-3">

                                    <!-- Tampilkan item yang dipilih -->
                                    <div class="d-flex flex-column mb-3">
                                        <h6 class="mb-2">Selected Items</h6>
                                        <table id="selectedItemsTable" class="table">
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
                                        <span id="productName">{{$product->nama_paket}}</span>
                                        <span id="productPrice">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <strong>Total Price</strong>
                                        <span id="subtotalPrice">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <!-- Modal "Select Service Extra" -->
                                    </tr>
                                    <div class="d-flex flex-column">
                                        </tr>
                                        </tbody>
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">NEXT STEPS</button>
                            </div> -->
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2" onclick="copySummaryToNextModal()">NEXT STEPS</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="overflow-y: auto;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Isi Form Reservasi</h1>
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
                                        <label for="jamPicker">Waktu</label>
                                        <select class="form-select" id="waktu" name="waktu" required>
                                            @foreach($times as $time)
                                            <option value="{{$time->waktu}}">{{$time->waktu}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Total Hrga">Total Harga</label>
                                        <input type="text" class="form-control" name="subtotal" id="subtotal" value="Rp0" readonly>
                                    </div>
                                    
                                    <!-- Di dalam modal kedua -->

                                    <div class="form-group">
                                        <table id="selectedItemsTable2" class="table">
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
                                        <input type="text" class="form-control" name="productName2" id="productName2" value="productName2"  style="border: none; background: transparent; padding: 0; margin: 0;" readonly>
                                        <!-- <span id="productName2"></span> -->
                                        <span id="productPrice2"></span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <strong>Total Price</strong>
                                            <span id="subtotalPrice2"></span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back</button>
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
        function calculateSubtotal() {
            var checkboxes = document.getElementsByName("service");
            var subtotal = 0; // Inisialisasi subtotal dengan 0
            var selectedItems = []; // Array untuk menyimpan item yang dipilih

            // Tambahkan harga paket yang dipilih ke subtotal
            var productPrice = parseFloat(document.getElementById("productPrice").textContent.replace("Rp", "").replace(".", ""));
            subtotal += productPrice;

            // Loop melalui setiap checkbox layanan tambahan
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    var price = parseFloat(checkboxes[i].value);
                    var qty = parseFloat(checkboxes[i].parentNode.nextElementSibling.querySelector("input[name='qty']").value);
                    subtotal += price * qty;

                    // Dapatkan nama layanan tambahan
                    var serviceName = checkboxes[i].parentNode.textContent.trim().split("-")[0].trim();
                    // Tambahkan item yang dipilih ke dalam array
                    selectedItems.push({
                        name: serviceName,
                        qty: qty
                    });
                }
            }

            // Tampilkan subtotal yang dihitung
            document.getElementById("subtotalPrice").textContent = "Rp" + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            document.getElementById("subtotal").value = "Rp" + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');

            // Tampilkan item-item yang dipilih dalam tabel
            var selectedItemsTable = document.getElementById("selectedItemsTable");
            var tbody = selectedItemsTable.getElementsByTagName("tbody")[0];
            tbody.innerHTML = ""; // Kosongkan tabel sebelum menambahkan item

            selectedItems.forEach(function(item) {
                var row = tbody.insertRow();
                var nameCell = row.insertCell(0);
                var qtyCell = row.insertCell(1);

                nameCell.textContent = item.name;
                qtyCell.textContent = item.qty;
            });
        }
    </script>


    <script>
        function copySummaryToNextModal() {
            // Copy Total Price
            var totalHarga = document.getElementById("subtotalPrice").textContent;
            document.getElementById("subtotal").value = totalHarga;
            // Copy Product Name
            // var productName = document.getElementById("productName").textContent;
            // document.getElementById("productName2").textContent = "Product: " + productName;

            var productName = document.getElementById("productName").textContent;
            document.getElementById("productName2").value =productName;

            // Copy Product Price
            var productPrice = document.getElementById("productPrice").textContent;
            document.getElementById("productPrice2").textContent = "Price: " + productPrice;

            // Copy Subtotal Price
            var subtotalPrice = document.getElementById("subtotalPrice").textContent;
            document.getElementById("subtotalPrice2").textContent = "Total Price: " + subtotalPrice;
            // Copy Selected Items
            var selectedItemsTable = document.getElementById("selectedItemsTable");
            var selectedItems = selectedItemsTable.querySelectorAll("tbody tr");

            var selectedItemsTable2 = document.getElementById("selectedItemsTable2");
            var tbody = selectedItemsTable2.getElementsByTagName("tbody")[0];
            tbody.innerHTML = ""; // Kosongkan tbody sebelum menambahkan item

            selectedItems.forEach(function(item) {
                var name = item.cells[0].textContent;
                var qty = item.cells[1].textContent;
                var newRow = tbody.insertRow();
                var nameCell = newRow.insertCell(0);
                var qtyCell = newRow.insertCell(1);
                nameCell.textContent = name;
                qtyCell.textContent = qty;
            });
        }
    </script>

   

    <!-- Blog Area End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JU3MR4x4K5+dBsx2JDA4NZLaOg5frN1BKcpTi/YOYTC67J+1zCkXwXPMvtnJwZx" crossorigin="anonymous"></script>
</main>
@endsection