@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Ghi chú</th>
                                        <th>Chi tiết</th>
                                        <th>Ngày</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy biến</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ABA</td>
                                        <td>09911</td>
                                        <td>@gmail.com</td>
                                        <td>11 Gò Vấp</td>
                                        <td>Giao giờ hành chính</td>
                                        <td>
                                            <a class="edit-class" href="/admin/order_detial">Chi tiết</a>
                                        </td>
                                        <td>24/12/2023</td>
                                        <td><a class="confirm-order" href="">Đã xác nhận</a></td>
                                        <td>
                                            <a class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AKA</td>
                                        <td>09911</td>
                                        <td>@gmail.com</td>
                                        <td>11 Gò Vấp</td>
                                        <td>Giao giờ hành chính</td>
                                        <td>
                                            <a class="edit-class" href="/admin/order_detial">Chi tiết</a>
                                        </td>
                                        <td>24/12/2023</td>
                                        <td><a class="non_confirm-order" href="">Chưa xác nhận</a></td>
                                        <td>
                                            <a class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
@endsection