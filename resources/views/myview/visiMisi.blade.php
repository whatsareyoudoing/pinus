@section('title', 'Visi & Misi Pilar Nusantara')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Visi & Misi</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-justify mb-5">
                <p>
                    “Membangun kemitraan strategis antara Pemerintah, Dunia Usaha, dan Masyarakat dalam mewujudkan tata kelola yang transparan, akuntabel, partisipatif, dan berkelanjutan demi tercapainya kesejahteraan masyarakat yang inklusif.”
                </p>
                <p>
                   Kami meyakini bahwa kesejahteraan tidak dapat dicapai oleh satu pihak saja. Diperlukan kolaborasi yang kuat, sinergi kebijakan, serta komitmen bersama dalam menerapkan prinsip tata kelola yang baik di setiap lini pembangunan. Melalui kemitraan yang saling menguatkan, kami berupaya menciptakan sistem yang adil, efektif, dan berdampak nyata bagi masyarakat luas.
                </p>
            </div>

            <div class="text-justify mb-5">

                <h5>1. Penguatan Kapasitas dan Partisipasi Masyarakat</h5>
                <p>
                    Bermitra dengan masyarakat untuk meningkatkan kapasitas, kesadaran, dan kemandirian dalam berpartisipasi aktif pada proses pembangunan dan pengawasan tata kelola. Kami mendorong keterlibatan masyarakat melalui pendidikan, pelatihan, advokasi, serta penguatan komunitas agar mampu menjadi bagian dari solusi pembangunan yang berkelanjutan.
                </p>
                <h5>2. Kolaborasi dengan Pemerintah dalam Penerapan Good Governance</h5>
                <p>Bermitra dengan Pemerintah, baik di tingkat pusat maupun daerah, dalam mendukung penerapan prinsip-prinsip transparansi, akuntabilitas, efektivitas, dan integritas dalam perencanaan, pelaksanaan, serta evaluasi program pembangunan. Kami berkomitmen menjadi mitra strategis yang memberikan kontribusi nyata melalui kajian, pendampingan, dan penguatan sistem tata kelola pemerintahan yang baik.</p>
                <h5>3. Sinergi dengan Dunia Usaha dalam Implementasi Good Corporate Governance</h5>
                <p>Bermitra dengan perusahaan untuk mendorong penerapan prinsip-prinsip Good Corporate Governance dalam praktik bisnis yang bertanggung jawab, etis, dan berorientasi pada keberlanjutan. Kami mendukung kolaborasi antara sektor swasta dan masyarakat dalam menciptakan nilai bersama (shared value) yang memberikan manfaat sosial, ekonomi, dan lingkungan secara berkelanjutan.</p>
            </div>
        </div>
    </div>
</div>

@endsection
