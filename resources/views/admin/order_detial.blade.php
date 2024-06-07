@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Tùy biến</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img style="width: 70px;" src="{{asset('backend/asset/image/49a89279353067e84a1bb0b08597d7a9_540x.jpeg')}}" alt=""></td>
                                        <td>Áo khoác</td>
                                        <td>11,000</td>
                                        <td>2</td>
                                        <td>22,000</td>
                                        <td>
                                            <a class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img style="width: 70px;" src="{{asset('backend/asset/image/49a89279353067e84a1bb0b08597d7a9_540x.jpeg')}}" alt=""></td>
                                        <td>Áo khoác</td>
                                        <td>11,000</td>
                                        <td>2</td>
                                        <td>22,000</td>
                                        <td>
                                            <a class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: 700;" colspan="5">Tổng cộng</td>
                                        <td style="font-weight: 700;">44,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
@endsection