@extends('admin.layout.app')
@section('content')
<main>
        <div class="header">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
              <li><a href="#"> Dashboard </a></li>
              /
            </ul>
          </div>
        </div>

        <article class="admin-welcome">
          <h1>Selamat datang di Dashboard Admin Gift Ecommerce App</h1>
          <p>Halo  Admin,</p>
          <p>Terima kasih telah menjadi bagian dari Admin Toko Kita.</p>
        </article>

        <!-- Insights -->
        <ul class="insights">
          <li>
            <i class="bx bx-line-chart"></i>
            <span class="info">
              <h3>101</h3>
              <p>order Prosess</p>
            </span>
          </li>
          <li>
            <i class="bx bx-time"></i>
            <span class="info">
              <h3>99</h3>
              <p>order Pending</p>
            </span>
          </li>
          <li>
            <i class="bx bx-check-double"></i>
            <span class="info">
              <h3>76</h3>
              <p>order success</p>
            </span>
          </li>
          <li>
            <i class="bx bx-error-circle"></i>
            <span class="info">
              <h3>22</h3>
              <p>order gagal</p>
            </span>
          </li>
        </ul>
        <!-- End of Insights -->

        <div class="bottom-data">
          <div class="orders">
            <div class="header">
              <i class="bx bx-receipt"></i>
              <h3>Order Terbaru</h3>
              <i class="bx bx-filter"></i>
              <i class="bx bx-search"></i>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Barang</th>
                  <th>Order Date</th>
                  <th>Jmmlah</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="{{('admin')}}/images/jam.png" />
                    <p>Jam Tangan</p>
                  </td>
                  <td>1</td>
                  <td>14-08-2023</td>
                  <td><span class="status completed">Completed</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="{{('admin')}}/images/boneka.png" />
                    <p>Boneka</p>
                  </td>
                  <td>3</td>
                  <td>14-08-2023</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="{{('admin')}}/images/cincin.png" />
                    <p>Cincin</p>
                  </td>
                  <td>8</td>
                  <td>14-08-2023</td>
                  <td><span class="status process">Processing</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="{{('admin')}}/images/bucket.png" />
                    <p>Bucket</p>
                  </td>
                  <td>8</td>
                  <td>14-08-2023</td>
                  <td><span class="status failed">fail</span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- stok -->
          <div class="stok">
            <div class="header">
              <i class="bx bx-note"></i>
              <h3>Stok Barang</h3>
              <i class="bx bx-filter"></i>
              <i class="bx bx-plus"></i>
            </div>
            <ul class="stok-list">
              <li class="stok-aman">
                <div class="stok-title">
                  <p>Bucket</p>
                </div>
                4
              </li>
              <li class="stok-aman">
                <div class="stok-title">
                  <p>Cincin</p>
                </div>
                4
              </li>
              <li class="stok-tidak-aman">
                <div class="stok-title">
                  <p>Jam Tangan</p>
                </div>
                0
              </li>
            </ul>
          </div>

          <!-- End of stok-->
        </div>
      </main>


@endsection