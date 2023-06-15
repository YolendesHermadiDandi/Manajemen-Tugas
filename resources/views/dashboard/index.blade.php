@extends('layouts.main')

@section('container')
    <h1>Home</h1>
    <div class="welcome-name">
        <p>Selamat Datang, Yolendes Hermadi Dandi</p>
    </div>

    <div class="main-content">
        <div class="tugas-progress">
            <fieldset>
                <legend>Progress Tugas</legend>
                <div class="tugas">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Tugas</th>
                                <th>Progress</th>
                                <th>Deadline</th>
                                <th>Satatus</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tr>
                            <td>1</td>
                            <td>Tugas 1</td>
                            <td>90%</td>
                            <td>23 Hari Lagi</td>
                            <td>Progress</td>
                            <td><a href="">View</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tugas 1</td>
                            <td>90%</td>
                            <td>23 Hari Lagi</td>
                            <td>Progress</td>
                            <td><a href="">View</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tugas 1</td>
                            <td>90%</td>
                            <td>23 Hari Lagi</td>
                            <td>Progress</td>
                            <td><a href="">View</a></td>
                        </tr>
                    </table>
                </div>
            </fieldset>
        </div>
        <div class="informasi-tugas">
            <fieldset>
                <legend>Informasi Tugas</legend>
                <div class="info-card">
                    <div class="info-card-main">
                        <div class="icon">
                            <p>💼</p>
                        </div>
                        <h1>3</h1>
                        <p>Total Tugas</p>

                    </div>
                    <div class="info-card-main">
                        <div class="icon">
                            <p>📚</p>
                        </div>
                        <h1>10</h1>
                        <p>Total Sub Tugas</p>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="tugas-progress-modal">
        <div class="modal-container">
            <div class="judul-modal">
                <h1>Tugas 1</h1>
                <h1>90% Complate</h1>
            </div>
            <div class="modal-main-content">
                <form action="">
                    @csrf
                    <div class="tugas-form-content">
                        <div class="main-tugas">
                            <div class="form-input">
                                <label for="nama">Nama Tugas</label>
                                <input type="text" name="nama-tugas" id="nama" placeholder="Nama Tugas">
                            </div>
                            <div class="form-input">
                                <label for="deadline">Deadline</label>
                                <input type="date" name="deadline" id="deadline">
                            </div>
                            <div class="form-input">
                                <label for="name">Status</label>
                                <p><i class="fa-regular fa-square-check"></i>1/3</p>
                                <p><i class="fa-solid fa-square-check"></i>3/3</p>
                            </div>
                            <div class="form-input">
                                <label for="tim">Tim</label>
                                <input type="text" name="tim" id="tim" placeholder="Masukan Tim Anda">
                            </div>
                        </div>
                        <div class="sub-tugas">
                            <div class="form-input">
                                <form action="">
                                    <div class="form-input">
                                        <label for="sub-tugas">Nama Sub Tugas</label>
                                        <input type="text" name="sub-tugas" id="sub-tugas">
                                        <button type="submit">+</button>
                                    </div>
                                    <div class="daftar-sub-tugas">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Makan</td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td>Minum</td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td>Turu</td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="deskripsi">
                        <div class="form-input">
                            <label for="deskripsi-tugas">Deskripsi</label>
                            <textarea name="deskripsi-tugas" id="deskripsitugas" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="submit">Simpan</button>
                </form>
            </div>

        </div>
    </div>
@endsection


{{-- 
    <p>{{ $user['name'] }}</p>
    <p>{{ $user['email'] }}</p>
    <p>{{ $token }}</p> --}}
{{-- <h1>{{ $email }}</h1> --}}
