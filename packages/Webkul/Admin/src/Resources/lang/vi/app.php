<?php

return [
    'acl' => [
        'leads'           => 'Những Khách hàng tiềm năng',
        'lead'            => 'Khách hàng tiềm năng',
        'quotes'          => 'Báo giá',
        'mail'            => 'Thư',
        'inbox'           => 'Hộp thư đến',
        'draft'           => 'Thư nháp',
        'outbox'          => 'Hộp thư đi',
        'sent'            => 'Đã gửi',
        'trash'           => 'Thùng rác',
        'activities'      => 'Hoạt động',
        'webhook'         => 'Webhook',
        'contacts'        => 'Danh bạ',
        'persons'         => 'Cá nhân',
        'organizations'   => 'Tổ chức',
        'products'        => 'Sản phẩm',
        'settings'        => 'Cài đặt',
        'groups'          => 'Nhóm',
        'roles'           => 'Vai trò',
        'users'           => 'Người dùng',
        'user'            => 'Người dùng',
        'automation'      => 'Tự động hóa',
        'attributes'      => 'Thuộc tính',
        'pipelines'       => 'Quy trình',
        'sources'         => 'Nguồn',
        'types'           => 'Loại',
        'email-templates' => 'Mẫu email',
        'workflows'       => 'Quy trình làm việc',
        'other-settings'  => 'Cài đặt khác',
        'tags'            => 'Thẻ',
        'configuration'   => 'Cấu hình',
        'campaigns'       => 'Chiến dịch',
        'event'           => 'Sự kiện',
        'create'          => 'Tạo mới',
        'edit'            => 'Chỉnh sửa',
        'view'            => 'Xem',
        'print'           => 'In',
        'delete'          => 'Xóa',
        'export'          => 'Xuất khẩu',
        'mass-delete'     => 'Xóa hàng loạt',
    ],

    'users' => [
        'activate-warning' => 'Tài khoản của bạn chưa được kích hoạt. Vui lòng liên hệ quản trị viên.',
        'login-error'      => 'Thông tin đăng nhập không khớp với hồ sơ của chúng tôi.',
        'not-permission'   => 'Bạn không có quyền truy cập vào bảng quản trị.',

        'login' => [
            'email'                => 'Địa chỉ Email',
            'forget-password-link' => 'Quên Mật khẩu?',
            'password'             => 'Mật khẩu',
            'submit-btn'           => 'Đăng Nhập',
            'title'                => 'Đăng Nhập',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'Email Đã Đăng Ký',
                'email-not-exist' => 'Email Không Tồn Tại',
                'page-title'      => 'Quên Mật khẩu',
                'reset-link-sent' => 'Liên kết đặt lại mật khẩu đã được gửi',
                'sign-in-link'    => 'Quay lại Đăng Nhập?',
                'submit-btn'      => 'Đặt Lại',
                'title'           => 'Khôi Phục Mật khẩu',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'Quay lại Đăng Nhập?',
            'confirm-password' => 'Xác Nhận Mật Khẩu',
            'email'            => 'Email Đã Đăng Ký',
            'password'         => 'Mật Khẩu',
            'submit-btn'       => 'Đặt Lại Mật Khẩu',
            'title'            => 'Đặt Lại Mật Khẩu',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Quay Lại',
            'change-password'   => 'Đổi Mật Khẩu',
            'confirm-password'  => 'Xác Nhận Mật Khẩu',
            'current-password'  => 'Mật Khẩu Hiện Tại',
            'email'             => 'Email',
            'general'           => 'Chung',
            'invalid-password'  => 'Mật khẩu hiện tại bạn nhập không đúng.',
            'name'              => 'Tên',
            'password'          => 'Mật Khẩu',
            'profile-image'     => 'Ảnh Hồ Sơ',
            'save-btn'          => 'Lưu Tài Khoản',
            'title'             => 'Tài Khoản Của Tôi',
            'update-success'    => 'Tài khoản đã được cập nhật thành công',
            'upload-image-info' => 'Tải lên Ảnh Hồ Sơ (110px X 110px) ở định dạng PNG hoặc JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'Thư',
                    'title'        => 'Soạn thư',
                    'to'           => 'Tới',
                    'enter-emails' => 'Nhấn enter để thêm email',
                    'cc'           => 'CC',
                    'bcc'          => 'BCC',
                    'subject'      => 'Chủ đề',
                    'send-btn'     => 'Gửi',
                    'message'      => 'Tin nhắn',
                ],

                'file' => [
                    'btn'           => 'Tệp',
                    'title'         => 'Thêm tệp',
                    'title-control' => 'Tiêu đề',
                    'name'          => 'Tên',
                    'description'   => 'Mô tả',
                    'file'          => 'Tệp',
                    'save-btn'      => 'Lưu tệp',
                ],

                'note' => [
                    'btn'      => 'Ghi chú',
                    'title'    => 'Thêm ghi chú',
                    'comment'  => 'Bình luận',
                    'save-btn' => 'Lưu ghi chú',
                ],

                'activity' => [
                    'btn'           => 'Hoạt động',
                    'title'         => 'Thêm hoạt động',
                    'title-control' => 'Tiêu đề',
                    'description'   => 'Mô tả',
                    'schedule-from' => 'Lịch từ',
                    'schedule-to'   => 'Lịch đến',
                    'location'      => 'Địa điểm',
                    'call'          => 'Cuộc gọi',
                    'meeting'       => 'Cuộc họp',
                    'lunch'         => 'Bữa trưa',
                    'save-btn'      => 'Lưu hoạt động',

                    'participants' => [
                        'title'       => 'Người tham gia',
                        'placeholder' => 'Nhập để tìm kiếm người tham gia',
                        'users'       => 'Người dùng',
                        'persons'     => 'Người',
                        'no-results'  => 'Không có kết quả...',
                    ],
                ],
            ],

            'index' => [
                'all'          => 'Tất cả',
                'bcc'          => 'Bcc',
                'by-user'      => 'Bởi :user',
                'calls'        => 'Cuộc gọi',
                'cc'           => 'Cc',
                'change-log'   => 'Nhật ký thay đổi',
                'delete'       => 'Xóa',
                'edit'         => 'Chỉnh sửa',
                'emails'       => 'Email',
                'empty'        => 'Trống',
                'files'        => 'Tệp tin',
                'from'         => 'Từ',
                'location'     => 'Địa điểm',
                'lunches'      => 'Bữa trưa',
                'mark-as-done' => 'Đánh dấu hoàn thành',
                'meetings'     => 'Cuộc họp',
                'notes'        => 'Ghi chú',
                'participants' => 'Người tham gia',
                'planned'      => 'Đã lên kế hoạch',
                'quotes'       => 'Báo giá',
                'scheduled-on' => 'Lên lịch vào',
                'system'       => 'Hệ thống',
                'to'           => 'Đến',
                'unlink'       => 'Gỡ liên kết',
                'view'         => 'Xem',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'Không có hoạt động nào',
                        'description' => 'Không có hoạt động nào cho mục này. Bạn có thể thêm hoạt động bằng cách nhấp vào nút bên trái.',
                    ],

                    'planned' => [
                        'title'       => 'Không có hoạt động đã lên kế hoạch nào',
                        'description' => 'Không có hoạt động đã lên kế hoạch cho mục này. Bạn có thể thêm hoạt động bằng cách nhấp vào nút bên trái.',
                    ],

                    'notes' => [
                        'title'       => 'Không có ghi chú nào',
                        'description' => 'Không có ghi chú cho mục này. Bạn có thể thêm ghi chú bằng cách nhấp vào nút bên trái.',
                    ],

                    'calls' => [
                        'title'       => 'Không có cuộc gọi nào',
                        'description' => 'Không có ghi chú cho mục này. Bạn có thể thêm ghi chú bằng cách nhấp vào nút bên trái.',
                    ],

                    'meetings' => [
                        'title'       => 'Không có cuộc họp nào',
                        'description' => 'Không có cuộc họp cho mục này. Bạn có thể thêm cuộc họp bằng cách nhấp vào nút bên trái.',
                    ],

                    'lunches' => [
                        'title'       => 'Không có bữa trưa nào',
                        'description' => 'Không có bữa trưa cho mục này. Bạn có thể thêm bữa trưa bằng cách nhấp vào nút bên trái.',
                    ],

                    'files' => [
                        'title'       => 'Không có tệp tin nào',
                        'description' => 'Không có tệp nào cho mục này. Bạn có thể thêm tệp bằng cách nhấp vào nút bên trái.',
                    ],

                    'emails' => [
                        'title'       => 'Không có email nào',
                        'description' => 'Không có email nào cho mục này. Bạn có thể thêm email bằng cách nhấp vào nút bên trái.',
                    ],

                    'system' => [
                        'title'       => 'Không có nhật ký thay đổi nào',
                        'description' => 'Không có nhật ký thay đổi nào cho mục này.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Thêm hình ảnh',
                'ai-add-image-btn'  => 'Magic AI',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Chỉ chấp nhận tệp hình ảnh (.jpeg, .jpg, .png, ..).',

                'placeholders' => [
                    'front'     => 'Mặt trước',
                    'next'      => 'Kế tiếp',
                    'size'      => 'Kích thước',
                    'use-cases' => 'Trường hợp sử dụng',
                    'zoom'      => 'Thu phóng',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Thêm video',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Chỉ chấp nhận tệp video (.mp4, .mov, .ogg ..).',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'Chưa có bản ghi nào được chọn.',
                'must-select-a-mass-action-option' => 'Bạn phải chọn một tùy chọn hành động hàng loạt.',
                'must-select-a-mass-action'        => 'Bạn phải chọn một hành động hàng loạt.',
            ],

            'toolbar' => [
                'length-of' => ':length của',
                'of'        => 'của',
                'per-page'  => 'Mỗi Trang',
                'results'   => ':total Kết quả',
                'delete'    => 'Xóa',
                'selected'  => ':total Mục đã chọn',

                'mass-actions' => [
                    'submit'        => 'Gửi',
                    'select-option' => 'Chọn Tùy chọn',
                    'select-action' => 'Chọn Hành động',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Áp dụng Bộ lọc',
                    'back-btn'          => 'Quay lại',
                    'create-new-filter' => 'Tạo Bộ lọc Mới',
                    'custom-filters'    => 'Bộ lọc Tùy chỉnh',
                    'delete-error'      => 'Đã xảy ra lỗi khi xóa bộ lọc, vui lòng thử lại.',
                    'delete-success'    => 'Bộ lọc đã được xóa thành công.',
                    'empty-description' => 'Không có bộ lọc nào được chọn để lưu. Vui lòng chọn bộ lọc để lưu.',
                    'empty-title'       => 'Thêm Bộ lọc để Lưu',
                    'name'              => 'Tên',
                    'quick-filters'     => 'Bộ lọc Nhanh',
                    'save-btn'          => 'Lưu',
                    'save-filter'       => 'Lưu Bộ lọc',
                    'saved-success'     => 'Bộ lọc đã được lưu thành công.',
                    'selected-filters'  => 'Bộ lọc đã chọn',
                    'title'             => 'Bộ lọc',
                    'update'            => 'Cập nhật',
                    'update-filter'     => 'Cập nhật Bộ lọc',
                    'updated-success'   => 'Bộ lọc đã được cập nhật thành công.',
                ],

                'search' => [
                    'title' => 'Tìm kiếm',
                ],
            ],

            'filters' => [
                'select' => 'Chọn',
                'title'  => 'Bộ lọc',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Nhập ít nhất 2 ký tự...',
                        'no-results'         => 'Không tìm thấy kết quả...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Xóa tất cả',
                    'title'     => 'Bộ lọc Tùy chỉnh',
                ],

                'boolean-options' => [
                    'false' => 'Sai',
                    'true'  => 'Đúng',
                ],

                'date-options' => [
                    'last-month'        => 'Tháng trước',
                    'last-six-months'   => '6 Tháng trước',
                    'last-three-months' => '3 Tháng trước',
                    'this-month'        => 'Tháng này',
                    'this-week'         => 'Tuần này',
                    'this-year'         => 'Năm nay',
                    'today'             => 'Hôm nay',
                    'yesterday'         => 'Hôm qua',
                ],
            ],

            'table' => [
                'actions'              => 'Hành động',
                'no-records-available' => 'Không có Bản ghi nào.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'Đồng ý',
                'disagree-btn' => 'Không đồng ý',
                'message'      => 'Bạn có chắc chắn muốn thực hiện hành động này không?',
                'title'        => 'Bạn có chắc chắn?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Thẻ',
                'added-tags'     => 'Thẻ đã thêm',
                'save-btn'       => 'Lưu Thẻ',
                'placeholder'    => 'Nhập để tìm thẻ',
                'add-tag'        => 'Thêm ":term"...',
                'aquarelle-red'  => 'Đỏ Aquarelle',
                'crushed-cashew' => 'Hạt điều nghiền',
                'beeswax'        => 'Sáp ong',
                'lemon-chiffon'  => 'Vàng Chanh',
                'snow-flurry'    => 'Tuyết Bay',
                'honeydew'       => 'Mật Ong',
            ],
        ],

        'layouts' => [
            'powered-by' => [
                'description' => 'Được hỗ trợ bởi :krayin, một dự án mã nguồn mở được phát triển bởi :webkul.',
            ],

            'header' => [
                'mega-search' => [
                    'title'   => 'Tìm kiếm Mega',

                    'tabs' => [
                        'leads'    => 'Khách hàng tiềm năng',
                        'quotes'   => 'Báo giá',
                        'persons'  => 'Người',
                        'products' => 'Sản phẩm',
                    ],

                    'explore-all-products'          => 'Khám phá tất cả Sản phẩm',
                    'explore-all-leads'             => 'Khám phá tất cả Khách hàng tiềm năng',
                    'explore-all-contacts'          => 'Khám phá tất cả Liên hệ',
                    'explore-all-quotes'            => 'Khám phá tất cả Báo giá',
                    'explore-all-matching-products' => 'Khám phá tất cả sản phẩm khớp với ":query" (:count)',
                    'explore-all-matching-leads'    => 'Khám phá tất cả khách hàng tiềm năng khớp với ":query" (:count)',
                    'explore-all-matching-contacts' => 'Khám phá tất cả liên hệ khớp với ":query" (:count)',
                    'explore-all-matching-quotes'   => 'Khám phá tất cả báo giá khớp với ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => 'Xóa',
            ],

            'lookup' => [
                'click-to-add'    => 'Nhấn để thêm',
                'search'          => 'Tìm kiếm',
                'no-result-found' => 'Không tìm thấy kết quả',
                'search'          => 'Tìm kiếm...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'Nhấn để Thêm',
            'no-results'   => 'Không tìm thấy kết quả',
            'add-as-new'   => 'Thêm như mới',
            'search'       => 'Tìm kiếm...',
        ],

        'flash-group' => [
            'success' => 'Thành công',
            'error'   => 'Lỗi',
            'warning' => 'Cảnh báo',
            'info'    => 'Thông tin',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Báo giá',
            'create-btn'     => 'Tạo Báo giá',
            'create-success' => 'Báo giá đã được tạo thành công.',
            'update-success' => 'Báo giá đã được cập nhật thành công.',
            'delete-success' => 'Báo giá đã được xóa thành công.',
            'delete-failed'  => 'Không thể xóa báo giá.',

            'datagrid' => [
                'subject'        => 'Chủ đề',
                'sales-person'   => 'Nhân viên bán hàng',
                'expired-at'     => 'Hết hạn vào',
                'created-at'     => 'Tạo vào',
                'expired-quotes' => 'Báo giá hết hạn',
                'person'         => 'Người',
                'subtotal'       => 'Tổng phụ',
                'discount'       => 'Giảm giá',
                'tax'            => 'Thuế',
                'adjustment'     => 'Điều chỉnh',
                'grand-total'    => 'Tổng cộng',
                'edit'           => 'Chỉnh sửa',
                'delete'         => 'Xóa',
                'print'          => 'In',
            ],

            'pdf' => [
                'adjustment'       => 'Điều chỉnh',
                'amount'           => 'Số tiền',
                'billing-address'  => 'Địa chỉ thanh toán',
                'date'             => 'Ngày',
                'discount'         => 'Giảm giá',
                'expired-at'       => 'Hết hạn vào',
                'grand-total'      => 'Tổng cộng',
                'person'           => 'Người',
                'price'            => 'Giá',
                'product-name'     => 'Tên sản phẩm',
                'quantity'         => 'Số lượng',
                'quote-id'         => 'ID Báo giá',
                'sales-person'     => 'Nhân viên bán hàng',
                'shipping-address' => 'Địa chỉ giao hàng',
                'sku'              => 'Mã sản phẩm (SKU)',
                'sub-total'        => 'Tổng phụ',
                'subject'          => 'Chủ đề',
                'tax'              => 'Thuế',
                'title'            => 'Báo giá',
            ],
        ],

        'create' => [
            'title'             => 'Tạo Báo giá',
            'save-btn'          => 'Lưu Báo giá',
            'quote-info'        => 'Thông tin Báo giá',
            'quote-info-info'   => 'Nhập thông tin cơ bản của báo giá.',
            'address-info'      => 'Thông tin Địa chỉ',
            'address-info-info' => 'Thông tin về địa chỉ liên quan đến báo giá.',
            'quote-items'       => 'Mục Báo giá',
            'search-products'   => 'Tìm kiếm Sản phẩm',
            'link-to-lead'      => 'Liên kết tới lead',
            'quote-item-info'   => 'Thêm Yêu cầu Sản phẩm cho báo giá này.',
            'quote-name'        => 'Tên Báo giá',
            'quantity'          => 'Số lượng',
            'price'             => 'Giá',
            'discount'          => 'Giảm giá',
            'tax'               => 'Thuế',
            'total'             => 'Tổng cộng',
            'amount'            => 'Số tiền',
            'add-item'          => '+ Thêm Mục',
            'sub-total'         => 'Tổng phụ (:symbol)',
            'total-discount'    => 'Giảm giá (:symbol)',
            'total-tax'         => 'Thuế (:symbol)',
            'total-adjustment'  => 'Điều chỉnh (:symbol)',
            'grand-total'       => 'Tổng cộng (:symbol)',
            'discount-amount'   => 'Số tiền giảm giá',
            'tax-amount'        => 'Số tiền thuế',
            'adjustment-amount' => 'Số tiền điều chỉnh',
            'product-name'      => 'Tên Sản phẩm',
            'action'            => 'Hành động',
        ],

        'edit' => [
            'title'             => 'Chỉnh sửa Báo giá',
            'save-btn'          => 'Lưu Báo giá',
            'quote-info'        => 'Thông tin Báo giá',
            'quote-info-info'   => 'Nhập thông tin cơ bản của báo giá.',
            'address-info'      => 'Thông tin Địa chỉ',
            'address-info-info' => 'Thông tin về địa chỉ liên quan đến báo giá.',
            'quote-items'       => 'Mục Báo giá',
            'link-to-lead'      => 'Liên kết tới lead',
            'quote-item-info'   => 'Thêm Yêu cầu Sản phẩm cho báo giá này.',
            'quote-name'        => 'Tên Báo giá',
            'quantity'          => 'Số lượng',
            'price'             => 'Giá',
            'search-products'   => 'Tìm kiếm Sản phẩm',
            'discount'          => 'Giảm giá',
            'tax'               => 'Thuế',
            'total'             => 'Tổng cộng',
            'amount'            => 'Số tiền',
            'add-item'          => '+ Thêm Mục',
            'sub-total'         => 'Tổng phụ (:symbol)',
            'total-discount'    => 'Giảm giá (:symbol)',
            'total-tax'         => 'Thuế (:symbol)',
            'total-adjustment'  => 'Điều chỉnh (:symbol)',
            'grand-total'       => 'Tổng cộng (:symbol)',
            'discount-amount'   => 'Số tiền giảm giá',
            'tax-amount'        => 'Số tiền thuế',
            'adjustment-amount' => 'Số tiền điều chỉnh',
            'product-name'      => 'Tên Sản phẩm',
            'action'            => 'Hành động',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Người',
                'create-btn'     => 'Tạo Người',
                'create-success' => 'Người đã được tạo thành công.',
                'update-success' => 'Người đã được cập nhật thành công.',
                'delete-success' => 'Người đã được xóa thành công.',
                'delete-failed'  => 'Không thể xóa người này.',

                'datagrid' => [
                    'contact-numbers'   => 'Số Liên hệ',
                    'delete'            => 'Xóa',
                    'edit'              => 'Chỉnh sửa',
                    'emails'            => 'Email',
                    'id'                => 'ID',
                    'view'              => 'Xem',
                    'name'              => 'Tên',
                    'organization-name' => 'Tên Tổ chức',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'Thông tin về Người',
                'about-organization' => 'Thông tin về Tổ chức',

                'activities' => [
                    'index' => [
                        'all'          => 'Tất cả',
                        'calls'        => 'Cuộc gọi',
                        'meetings'     => 'Cuộc họp',
                        'lunches'      => 'Bữa trưa',
                        'files'        => 'Tệp',
                        'quotes'       => 'Báo giá',
                        'notes'        => 'Ghi chú',
                        'emails'       => 'Email',
                        'by-user'      => 'Bởi :user',
                        'scheduled-on' => 'Đã lên lịch vào',
                        'location'     => 'Vị trí',
                        'participants' => 'Người tham gia',
                        'mark-as-done' => 'Đánh dấu là Đã hoàn thành',
                        'delete'       => 'Xóa',
                        'edit'         => 'Chỉnh sửa',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'Mail',
                            'title'    => 'Soạn Mail',
                            'to'       => 'Đến',
                            'cc'       => 'CC',
                            'bcc'      => 'BCC',
                            'subject'  => 'Chủ đề',
                            'send-btn' => 'Gửi',
                            'message'  => 'Tin nhắn',
                        ],

                        'file' => [
                            'btn'           => 'Tệp',
                            'title'         => 'Thêm Tệp',
                            'title-control' => 'Tiêu đề',
                            'name'          => 'Tên Tệp',
                            'description'   => 'Mô tả',
                            'file'          => 'Tệp',
                            'save-btn'      => 'Lưu Tệp',
                        ],

                        'note' => [
                            'btn'      => 'Ghi chú',
                            'title'    => 'Thêm Ghi chú',
                            'comment'  => 'Bình luận',
                            'save-btn' => 'Lưu Ghi chú',
                        ],

                        'activity' => [
                            'btn'           => 'Hoạt động',
                            'title'         => 'Thêm Hoạt động',
                            'title-control' => 'Tiêu đề',
                            'description'   => 'Mô tả',
                            'schedule-from' => 'Lên lịch từ',
                            'schedule-to'   => 'Lên lịch đến',
                            'location'      => 'Vị trí',
                            'call'          => 'Cuộc gọi',
                            'meeting'       => 'Cuộc họp',
                            'lunch'         => 'Bữa trưa',
                            'save-btn'      => 'Lưu Hoạt động',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'Tạo Người',
                'save-btn' => 'Lưu Người',
            ],

            'edit' => [
                'title'    => 'Chỉnh sửa Người',
                'save-btn' => 'Lưu Người',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Tổ chức',
                'create-btn'     => 'Tạo Tổ chức',
                'create-success' => 'Tổ chức đã được tạo thành công.',
                'update-success' => 'Tổ chức đã được cập nhật thành công.',
                'delete-success' => 'Tổ chức đã được xóa thành công.',
                'delete-failed'  => 'Không thể xóa tổ chức.',

                'datagrid' => [
                    'delete'        => 'Xóa',
                    'edit'          => 'Chỉnh sửa',
                    'id'            => 'ID',
                    'name'          => 'Tên',
                    'persons-count' => 'Số người',
                ],
            ],

            'create' => [
                'title'    => 'Tạo Tổ chức',
                'save-btn' => 'Lưu Tổ chức',
            ],

            'edit' => [
                'title'    => 'Chỉnh sửa Tổ chức',
                'save-btn' => 'Lưu Tổ chức',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Sản phẩm',
            'create-btn'     => 'Tạo Sản phẩm',
            'create-success' => 'Sản phẩm đã được tạo thành công.',
            'update-success' => 'Sản phẩm đã được cập nhật thành công.',
            'delete-success' => 'Sản phẩm đã được xóa thành công.',
            'delete-failed'  => 'Không thể xóa sản phẩm.',

            'datagrid'   => [
                'allocated' => 'Đã phân bổ',
                'delete'    => 'Xóa',
                'edit'      => 'Chỉnh sửa',
                'id'        => 'ID',
                'in-stock'  => 'Có sẵn',
                'name'      => 'Tên',
                'on-hand'   => 'Sẵn có',
                'price'     => 'Giá',
                'sku'       => 'SKU',
                'view'      => 'Xem',
            ],
        ],

        'create' => [
            'save-btn'  => 'Lưu Sản phẩm',
            'title'     => 'Tạo Sản phẩm',
            'general'   => 'Thông tin chung',
            'price'     => 'Giá',
        ],

        'edit' => [
            'title'     => 'Chỉnh sửa Sản phẩm',
            'save-btn'  => 'Lưu Sản phẩm',
            'general'   => 'Thông tin chung',
            'price'     => 'Giá',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'Tất cả',
            'notes'       => 'Ghi chú',
            'files'       => 'Tệp',
            'inventories' => 'Tồn kho',
            'change-logs' => 'Nhật ký thay đổi',

            'attributes' => [
                'about-product' => 'Thông tin về sản phẩm',
            ],

            'inventory' => [
                'source'     => 'Nguồn',
                'in-stock'   => 'Có sẵn',
                'allocated'  => 'Đã phân bổ',
                'on-hand'    => 'Sẵn có',
                'actions'    => 'Hành động',
                'assign'     => 'Phân bổ',
                'add-source' => 'Thêm nguồn',
                'location'   => 'Vị trí',
                'add-more'   => 'Thêm nữa',
                'save'       => 'Lưu',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Cài đặt',

        'groups' => [
            'index' => [
                'create-btn'        => 'Tạo Nhóm',
                'title'             => 'Nhóm',
                'create-success'    => 'Nhóm đã được tạo thành công.',
                'update-success'    => 'Nhóm đã được cập nhật thành công.',
                'destroy-success'   => 'Nhóm đã được xóa thành công.',
                'delete-failed'     => 'Không thể xóa nhóm.',

                'datagrid'   => [
                    'delete'      => 'Xóa',
                    'description' => 'Mô tả',
                    'edit'        => 'Chỉnh sửa',
                    'id'          => 'ID',
                    'name'        => 'Tên',
                ],

                'edit' => [
                    'title' => 'Chỉnh sửa Nhóm',
                ],

                'create' => [
                    'name'        => 'Tên',
                    'title'       => 'Tạo Nhóm',
                    'description' => 'Mô tả',
                    'save-btn'    => 'Lưu Nhóm',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'Vai trò không thể xóa, vì đang được sử dụng trong người dùng quản trị.',
                'create-btn'                => 'Tạo Vai trò',
                'create-success'            => 'Vai trò đã được tạo thành công.',
                'current-role-delete-error' => 'Không thể xóa vai trò đã gán cho người dùng hiện tại.',
                'delete-failed'             => 'Không thể xóa vai trò.',
                'delete-success'            => 'Vai trò đã được xóa thành công.',
                'last-delete-error'         => 'Cần ít nhất một vai trò.',
                'settings'                  => 'Cài đặt',
                'title'                     => 'Vai trò',
                'update-success'            => 'Vai trò đã được cập nhật thành công.',
                'user-define-error'         => 'Không thể xóa vai trò hệ thống.',

                'datagrid'   => [
                    'all'             => 'Tất cả',
                    'custom'          => 'Tùy chỉnh',
                    'delete'          => 'Xóa',
                    'description'     => 'Mô tả',
                    'edit'            => 'Chỉnh sửa',
                    'id'              => 'ID',
                    'name'            => 'Tên',
                    'permission-type' => 'Loại quyền',
                ],
            ],

            'create' => [
                'access-control' => 'Kiểm soát truy cập',
                'all'            => 'Tất cả',
                'back-btn'       => 'Quay lại',
                'custom'         => 'Tùy chỉnh',
                'description'    => 'Mô tả',
                'general'        => 'Thông tin chung',
                'name'           => 'Tên',
                'permissions'    => 'Quyền',
                'save-btn'       => 'Lưu Vai trò',
                'title'          => 'Tạo Vai trò',
            ],

            'edit' => [
                'access-control' => 'Kiểm soát truy cập',
                'all'            => 'Tất cả',
                'back-btn'       => 'Quay lại',
                'custom'         => 'Tùy chỉnh',
                'description'    => 'Mô tả',
                'general'        => 'Thông tin chung',
                'name'           => 'Tên',
                'permissions'    => 'Quyền',
                'save-btn'       => 'Lưu Vai trò',
                'title'          => 'Chỉnh sửa Vai trò',
            ],
        ],
        'types' => [
            'index' => [
                'create-btn'     => 'Tạo Loại',
                'create-success' => 'Loại đã được tạo thành công.',
                'delete-failed'  => 'Không thể xóa loại.',
                'delete-success' => 'Loại đã được xóa thành công.',
                'title'          => 'Các Loại',
                'update-success' => 'Loại đã được cập nhật thành công.',

                'datagrid' => [
                    'delete'      => 'Xóa',
                    'description' => 'Mô tả',
                    'edit'        => 'Chỉnh sửa',
                    'id'          => 'ID',
                    'name'        => 'Tên',
                ],

                'create' => [
                    'name'     => 'Tên',
                    'save-btn' => 'Lưu Loại',
                    'title'    => 'Tạo Loại',
                ],

                'edit' => [
                    'title' => 'Chỉnh sửa Loại',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'Tạo Nguồn',
                'create-success' => 'Nguồn đã được tạo thành công.',
                'delete-failed'  => 'Không thể xóa nguồn.',
                'delete-success' => 'Nguồn đã được xóa thành công.',
                'title'          => 'Các Nguồn',
                'update-success' => 'Nguồn đã được cập nhật thành công.',

                'datagrid' => [
                    'delete' => 'Xóa',
                    'edit'   => 'Chỉnh sửa',
                    'id'     => 'ID',
                    'name'   => 'Tên',
                ],

                'create' => [
                    'name'     => 'Tên',
                    'save-btn' => 'Lưu Nguồn',
                    'title'    => 'Tạo Nguồn',
                ],

                'edit' => [
                    'title' => 'Chỉnh sửa Nguồn',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'Quy trình',
                'create-btn'     => 'Tạo Quy trình',
                'create-success' => 'Quy trình đã được tạo thành công.',
                'update-success' => 'Quy trình đã được cập nhật thành công.',
                'delete-success' => 'Quy trình đã được xóa thành công.',
                'delete-failed'  => 'Không thể xóa quy trình.',
                'datagrid'       => [
                    'delete'      => 'Xóa',
                    'description' => 'Mô tả',
                    'edit'        => 'Chỉnh sửa',
                    'id'          => 'ID',
                    'name'        => 'Tên',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'Cập nhật các đầu mối liên quan',
                'send-email-to-sales-owner'  => 'Gửi email đến người sở hữu bán hàng',
                'send-email-to-participants' => 'Gửi email đến các tham gia',
                'add-webhook'                => 'Thêm Webhook',
                'update-lead'                => 'Cập nhật đầu mối',
                'update-person'              => 'Cập nhật người',
                'send-email-to-person'       => 'Gửi email đến người',
                'add-tag'                    => 'Thêm Thẻ',
                'add-note-as-activity'       => 'Thêm Ghi chú như Hoạt động',
                'update-quote'               => 'Cập nhật báo giá',
            ],

            'create' => [
                'title'                  => 'Tạo Quy trình',
                'event'                  => 'Sự kiện',
                'back-btn'               => 'Quay lại',
                'save-btn'               => 'Lưu Quy trình',
                'name'                   => 'Tên',
                'basic-details'          => 'Thông tin cơ bản',
                'description'            => 'Mô tả',
                'actions'                => 'Hành động',
                'basic-details-info'     => 'Nhập thông tin cơ bản của quy trình.',
                'event-info'             => 'Một sự kiện kích hoạt, kiểm tra, điều kiện và thực hiện các hành động đã được định nghĩa.',
                'conditions'             => 'Điều kiện',
                'conditions-info'        => 'Điều kiện là các quy tắc kiểm tra kịch bản, được kích hoạt trong các dịp cụ thể.',
                'actions-info'           => 'Một hành động không chỉ giảm khối lượng công việc mà còn làm cho tự động hóa CRM dễ dàng hơn.',
                'value'                  => 'Giá trị',
                'condition-type'         => 'Loại điều kiện',
                'all-condition-are-true' => 'Tất cả điều kiện đều đúng',
                'any-condition-are-true' => 'Bất kỳ điều kiện nào cũng đúng',
                'add-condition'          => 'Thêm Điều kiện',
                'add-action'             => 'Thêm Hành động',
                'yes'                    => 'Có',
                'no'                     => 'Không',
                'email'                  => 'Email',
                'is-equal-to'            => 'Bằng với',
                'is-not-equal-to'        => 'Không bằng với',
                'equals-or-greater-than' => 'Bằng hoặc lớn hơn',
                'equals-or-less-than'    => 'Bằng hoặc nhỏ hơn',
                'greater-than'           => 'Lớn hơn',
                'less-than'              => 'Nhỏ hơn',
                'type'                   => 'Loại',
                'contain'                => 'Chứa',
                'contains'               => 'Chứa',
                'does-not-contain'       => 'Không chứa',
            ],

            'edit' => [
                'title'                  => 'Chỉnh sửa Quy trình',
                'event'                  => 'Sự kiện',
                'back-btn'               => 'Quay lại',
                'save-btn'               => 'Lưu Quy trình',
                'name'                   => 'Tên',
                'basic-details'          => 'Thông tin cơ bản',
                'description'            => 'Mô tả',
                'actions'                => 'Hành động',
                'type'                   => 'Loại',
                'basic-details-info'     => 'Nhập thông tin cơ bản của quy trình.',
                'event-info'             => 'Một sự kiện kích hoạt, kiểm tra, điều kiện và thực hiện các hành động đã được định nghĩa.',
                'conditions'             => 'Điều kiện',
                'conditions-info'        => 'Điều kiện là các quy tắc kiểm tra kịch bản, được kích hoạt trong các dịp cụ thể.',
                'actions-info'           => 'Một hành động không chỉ giảm khối lượng công việc mà còn làm cho tự động hóa CRM dễ dàng hơn.',
                'value'                  => 'Giá trị',
                'condition-type'         => 'Loại điều kiện',
                'all-condition-are-true' => 'Tất cả điều kiện đều đúng',
                'any-condition-are-true' => 'Bất kỳ điều kiện nào cũng đúng',
                'add-condition'          => 'Thêm Điều kiện',
                'add-action'             => 'Thêm Hành động',
                'yes'                    => 'Có',
                'no'                     => 'Không',
                'email'                  => 'Email',
                'is-equal-to'            => 'Bằng với',
                'is-not-equal-to'        => 'Không bằng với',
                'equals-or-greater-than' => 'Bằng hoặc lớn hơn',
                'equals-or-less-than'    => 'Bằng hoặc nhỏ hơn',
                'greater-than'           => 'Lớn hơn',
                'less-than'              => 'Nhỏ hơn',
                'contain'                => 'Chứa',
                'contains'               => 'Chứa',
                'does-not-contain'       => 'Không chứa',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Biểu mẫu Web',
                'create-btn'     => 'Tạo Biểu mẫu Web',
                'create-success' => 'Biểu mẫu Web đã được tạo thành công.',
                'update-success' => 'Biểu mẫu Web đã được cập nhật thành công.',
                'delete-success' => 'Biểu mẫu Web đã được xóa thành công.',
                'delete-failed'  => 'Biểu mẫu Web không thể bị xóa.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Tiêu đề',
                    'edit'   => 'Chỉnh sửa',
                    'delete' => 'Xóa',
                ],
            ],

            'create' => [
                'title'                    => 'Tạo Biểu mẫu Web',
                'add-attribute-btn'        => 'Thêm Nút Thuộc Tính',
                'attribute-label-color'    => 'Màu Nhãn Thuộc Tính',
                'attributes'               => 'Thuộc Tính',
                'attributes-info'          => 'Thêm các thuộc tính tùy chỉnh vào biểu mẫu.',
                'background-color'         => 'Màu Nền',
                'create-lead'              => 'Tạo Dẫn Dắt',
                'customize-webform'        => 'Tùy Chỉnh Biểu Mẫu Web',
                'customize-webform-info'   => 'Tùy chỉnh biểu mẫu web của bạn với màu sắc của các phần tử theo lựa chọn của bạn.',
                'description'              => 'Mô tả',
                'display-custom-message'   => 'Hiển thị thông điệp tùy chỉnh',
                'form-background-color'    => 'Màu Nền Biểu Mẫu',
                'form-submit-btn-color'    => 'Màu Nút Gửi Biểu Mẫu',
                'form-submit-button-color' => 'Màu Nút Gửi Biểu Mẫu',
                'form-title-color'         => 'Màu Tiêu Đề Biểu Mẫu',
                'general'                  => 'Chung',
                'leads'                    => 'Dẫn Dắt',
                'person'                   => 'Người',
                'save-btn'                 => 'Lưu Biểu Mẫu Web',
                'submit-button-label'      => 'Nhãn Nút Gửi',
                'submit-success-action'    => 'Hành Động Thành Công Khi Gửi',
                'redirect-to-url'          => 'Chuyển Hướng Đến URL',
                'choose-value'             => 'Chọn Giá Trị',
                'select-file'              => 'Chọn Tập Tin',
                'select-image'             => 'Chọn Hình Ảnh',
                'enter-value'              => 'Nhập Giá Trị',
            ],

            'edit' => [
                'title'                     => 'Chỉnh Sửa Biểu Mẫu Web',
                'add-attribute-btn'         => 'Thêm Nút Thuộc Tính',
                'attribute-label-color'     => 'Màu Nhãn Thuộc Tính',
                'attributes'                => 'Thuộc Tính',
                'attributes-info'           => 'Thêm các thuộc tính tùy chỉnh vào biểu mẫu.',
                'background-color'          => 'Màu Nền',
                'code-snippet'              => 'Mã Snippet',
                'copied'                    => 'Đã Sao Chép',
                'copy'                      => 'Sao Chép',
                'create-lead'               => 'Tạo Dẫn Dắt',
                'customize-webform'         => 'Tùy Chỉnh Biểu Mẫu Web',
                'customize-webform-info'    => 'Tùy chỉnh biểu mẫu web của bạn với màu sắc của các phần tử theo lựa chọn của bạn.',
                'description'               => 'Mô tả',
                'display-custom-message'    => 'Hiển thị thông điệp tùy chỉnh',
                'embed'                     => 'Nhúng',
                'form-background-color'     => 'Màu Nền Biểu Mẫu',
                'form-submit-btn-color'     => 'Màu Nút Gửi Biểu Mẫu',
                'form-submit-button-color'  => 'Màu Nút Gửi Biểu Mẫu',
                'form-title-color'          => 'Màu Tiêu Đề Biểu Mẫu',
                'general'                   => 'Chung',
                'leads'                     => 'Dẫn Dắt',
                'preview'                   => 'Xem Trước',
                'person'                    => 'Người',
                'public-url'                => 'URL Công Khai',
                'redirect-to-url'           => 'Chuyển Hướng Đến URL',
                'save-btn'                  => 'Lưu Biểu Mẫu Web',
                'submit-button-label'       => 'Nhãn Nút Gửi',
                'submit-success-action'     => 'Hành Động Thành Công Khi Gửi',
                'choose-value'              => 'Chọn Giá Trị',
                'select-file'               => 'Chọn Tập Tin',
                'select-image'              => 'Chọn Hình Ảnh',
                'enter-value'               => 'Nhập Giá Trị',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'Tạo Mẫu Email',
                'title'          => 'Mẫu Email',
                'create-success' => 'Mẫu Email đã được tạo thành công.',
                'update-success' => 'Mẫu Email đã được cập nhật thành công.',
                'delete-success' => 'Mẫu Email đã được xóa thành công.',
                'delete-failed'  => 'Mẫu Email không thể bị xóa.',

                'datagrid'   => [
                    'delete'       => 'Xóa',
                    'edit'         => 'Chỉnh sửa',
                    'id'           => 'ID',
                    'name'         => 'Tên',
                    'subject'      => 'Chủ đề',
                ],
            ],

            'create'     => [
                'title'                => 'Tạo Mẫu Email',
                'save-btn'             => 'Lưu Mẫu Email',
                'email-template'       => 'Mẫu Email',
                'subject'              => 'Chủ đề',
                'content'              => 'Nội dung',
                'subject-placeholders' => 'Biến thể Chủ đề',
                'general'              => 'Chung',
                'name'                 => 'Tên',
            ],

            'edit' => [
                'title'                => 'Chỉnh Sửa Mẫu Email',
                'save-btn'             => 'Lưu Mẫu Email',
                'email-template'       => 'Mẫu Email',
                'subject'              => 'Chủ đề',
                'content'              => 'Nội dung',
                'subject-placeholders' => 'Biến thể Chủ đề',
                'general'              => 'Chung',
                'name'                 => 'Tên',
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'Tạo Sự kiện',
                    'title'               => 'Sự kiện',
                    'create-success'      => 'Sự kiện đã được tạo thành công.',
                    'update-success'      => 'Sự kiện đã được cập nhật thành công.',
                    'delete-success'      => 'Sự kiện đã được xóa thành công.',
                    'delete-failed'       => 'Không thể xóa sự kiện.',
                    'mass-delete-success' => 'Các sự kiện đã được xóa thành công',

                    'datagrid'   => [
                        'delete'       => 'Xóa',
                        'edit'         => 'Chỉnh sửa',
                        'id'           => 'ID',
                        'name'         => 'Tên',
                        'description'  => 'Mô tả',
                        'date'         => 'Ngày',
                    ],

                    'create'     => [
                        'title'       => 'Tạo Sự kiện',
                        'name'        => 'Tên',
                        'date'        => 'Ngày',
                        'description' => 'Mô tả',
                        'save-btn'    => 'Lưu Sự kiện',
                    ],

                    'edit' => [
                        'title' => 'Chỉnh sửa Sự kiện',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'Tạo Chiến dịch',
                    'title'               => 'Chiến dịch',
                    'create-success'      => 'Chiến dịch đã được tạo thành công.',
                    'update-success'      => 'Chiến dịch đã được cập nhật thành công.',
                    'delete-success'      => 'Chiến dịch đã được xóa thành công.',
                    'delete-failed'       => 'Không thể xóa chiến dịch.',
                    'mass-delete-success' => 'Các chiến dịch đã được xóa thành công',

                    'datagrid'   => [
                        'id'       => 'ID',
                        'name'     => 'Tên',
                        'subject'  => 'Chủ đề',
                        'status'   => 'Trạng thái',
                        'active'   => 'Kích hoạt',
                        'inactive' => 'Không kích hoạt',
                        'edit'     => 'Chỉnh sửa',
                        'delete'   => 'Xóa',
                    ],

                    'create'     => [
                        'title'          => 'Tạo Chiến dịch',
                        'name'           => 'Tên',
                        'type'           => 'Loại',
                        'subject'        => 'Chủ đề',
                        'event'          => 'Sự kiện',
                        'email-template' => 'Mẫu Email',
                        'status'         => 'Trạng thái',
                    ],

                    'edit' => [
                        'title' => 'Chỉnh sửa Chiến dịch',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'Tạo Thẻ',
                'title'          => 'Thẻ',
                'create-success' => 'Thẻ đã được tạo thành công.',
                'update-success' => 'Thẻ đã được cập nhật thành công.',
                'delete-success' => 'Thẻ đã được xóa thành công.',
                'delete-failed'  => 'Thẻ không thể bị xóa.',

                'datagrid' => [
                    'delete'      => 'Xóa',
                    'edit'        => 'Chỉnh sửa',
                    'id'          => 'ID',
                    'name'        => 'Tên',
                    'users'       => 'Người dùng',
                    'created-at'  => 'Ngày tạo',
                ],

                'create' => [
                    'name'     => 'Tên',
                    'save-btn' => 'Lưu Thẻ',
                    'title'    => 'Tạo Thẻ',
                    'color'    => 'Màu sắc',
                ],

                'edit' => [
                    'title' => 'Chỉnh Sửa Thẻ',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Tạo Người Dùng',
                'create-success'      => 'Người dùng đã được tạo thành công.',
                'delete-failed'       => 'Người dùng không thể bị xóa.',
                'delete-success'      => 'Người dùng đã được xóa thành công.',
                'last-delete-error'   => 'Cần ít nhất một người dùng.',
                'mass-delete-failed'  => 'Người dùng không thể bị xóa.',
                'mass-delete-success' => 'Người dùng đã được xóa thành công.',
                'mass-update-failed'  => 'Người dùng không thể được cập nhật.',
                'mass-update-success' => 'Người dùng đã được cập nhật thành công.',
                'title'               => 'Người Dùng',
                'update-success'      => 'Người dùng đã được cập nhật thành công.',
                'user-define-error'   => 'Không thể xóa người dùng hệ thống.',
                'active'              => 'Kích hoạt',
                'inactive'            => 'Không kích hoạt',

                'datagrid' => [
                    'active'        => 'Kích hoạt',
                    'created-at'    => 'Ngày tạo',
                    'delete'        => 'Xóa',
                    'edit'          => 'Chỉnh sửa',
                    'email'         => 'Email',
                    'id'            => 'ID',
                    'inactive'      => 'Không kích hoạt',
                    'name'          => 'Tên',
                    'status'        => 'Trạng thái',
                    'update-status' => 'Cập nhật Trạng thái',
                    'users'         => 'Người dùng',
                ],

                'create' => [
                    'confirm-password' => 'Xác nhận Mật khẩu',
                    'email'            => 'Email',
                    'general'          => 'Chung',
                    'global'           => 'Toàn cầu',
                    'group'            => 'Nhóm',
                    'individual'       => 'Cá nhân',
                    'name'             => 'Tên',
                    'password'         => 'Mật khẩu',
                    'permission'       => 'Quyền hạn',
                    'role'             => 'Vai trò',
                    'save-btn'         => 'Lưu Người Dùng',
                    'status'           => 'Trạng thái',
                    'title'            => 'Tạo Người Dùng',
                    'view-permission'  => 'Xem Quyền Hạn',
                ],

                'edit' => [
                    'title' => 'Chỉnh Sửa Người Dùng',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'Quy Trình',
                'create-btn'           => 'Tạo Quy Trình',
                'create-success'       => 'Quy trình đã được tạo thành công.',
                'update-success'       => 'Quy trình đã được cập nhật thành công.',
                'delete-success'       => 'Quy trình đã được xóa thành công.',
                'delete-failed'        => 'Quy trình không thể bị xóa.',
                'default-delete-error' => 'Quy trình mặc định không thể bị xóa.',

                'datagrid' => [
                    'delete'      => 'Xóa',
                    'edit'        => 'Chỉnh sửa',
                    'id'          => 'ID',
                    'is-default'  => 'Có phải là mặc định',
                    'name'        => 'Tên',
                    'no'          => 'Không',
                    'rotten-days' => 'Ngày Hỏng',
                    'yes'         => 'Có',
                ],
            ],

            'create' => [
                'title'                => 'Tạo Quy Trình',
                'save-btn'             => 'Lưu Quy Trình',
                'name'                 => 'Tên',
                'rotten-days'          => 'Ngày Hỏng',
                'mark-as-default'      => 'Đánh dấu là Mặc định',
                'general'              => 'Chung',
                'probability'          => 'Xác Suất (%)',
                'new-stage'            => 'Mới',
                'won-stage'            => 'Thắng',
                'lost-stage'           => 'Thua',
                'stage-btn'            => 'Thêm Giai Đoạn',
                'stages'               => 'Các Giai Đoạn',
                'duplicate-name'       => 'Trường "Tên" không được trùng lặp',
                'delete-stage'         => 'Xóa Giai Đoạn',
                'add-new-stages'       => 'Thêm Giai Đoạn Mới',
                'add-stage-info'       => 'Thêm giai đoạn mới cho Quy trình của bạn',
                'newly-added'          => 'Mới Thêm',
                'stage-delete-success' => 'Giai Đoạn đã được xóa thành công',
            ],

            'edit'  => [
                'title'                => 'Chỉnh Sửa Quy Trình',
                'save-btn'             => 'Lưu Quy Trình',
                'name'                 => 'Tên',
                'rotten-days'          => 'Ngày Hỏng',
                'mark-as-default'      => 'Đánh dấu là Mặc định',
                'general'              => 'Chung',
                'probability'          => 'Xác Suất (%)',
                'new-stage'            => 'Mới',
                'won-stage'            => 'Thắng',
                'lost-stage'           => 'Thua',
                'stage-btn'            => 'Thêm Giai Đoạn',
                'stages'               => 'Các Giai Đoạn',
                'duplicate-name'       => 'Trường "Tên" không được trùng lặp',
                'delete-stage'         => 'Xóa Giai Đoạn',
                'add-new-stages'       => 'Thêm Giai Đoạn Mới',
                'add-stage-info'       => 'Thêm giai đoạn mới cho Quy trình của bạn',
                'stage-delete-success' => 'Giai Đoạn đã được xóa thành công',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'Tạo Webhook',
                'create-success' => 'Webhook đã được tạo thành công.',
                'update-success' => 'Webhook đã được cập nhật thành công.',
                'delete-success' => 'Webhook đã được xóa thành công.',
                'delete-failed'  => 'Webhook không thể bị xóa.',

                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Xóa',
                    'edit'        => 'Chỉnh sửa',
                    'name'        => 'Tên',
                    'entity-type' => 'Loại Đối Tượng',
                    'end-point'   => 'Điểm Kết Thúc',
                ],
            ],

            'create' => [
                'title'                 => 'Tạo Webhook',
                'save-btn'              => 'Lưu Webhook',
                'info'                  => 'Nhập thông tin chi tiết của webhooks',
                'url-and-parameters'    => 'URL Và Tham Số',
                'method'                => 'Phương Thức',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Điểm Kết Thúc URL',
                'parameters'            => 'Tham Số',
                'add-new-parameter'     => 'Thêm Tham Số Mới',
                'url-preview'           => 'Xem Trước URL:',
                'headers'               => 'Tiêu Đề',
                'add-new-header'        => 'Thêm Tiêu Đề Mới',
                'body'                  => 'Nội Dung',
                'default'               => 'Mặc định',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Khóa và Giá trị',
                'add-new-payload'       => 'Thêm payload mới',
                'raw'                   => 'Thô',
                'general'               => 'Chung',
                'name'                  => 'Tên',
                'entity-type'           => 'Loại Đối Tượng',
                'insert-placeholder'    => 'Chèn Placeholder',
                'description'           => 'Mô Tả',
                'json'                  => 'Json',
                'text'                  => 'Văn bản',
            ],

            'edit' => [
                'title'                 => 'Chỉnh Sửa Webhook',
                'edit-btn'              => 'Lưu Webhook',
                'save-btn'              => 'Lưu Webhook',
                'info'                  => 'Nhập thông tin chi tiết của webhooks',
                'url-and-parameters'    => 'URL Và Tham Số',
                'method'                => 'Phương Thức',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Điểm Kết Thúc URL',
                'parameters'            => 'Tham Số',
                'add-new-parameter'     => 'Thêm Tham Số Mới',
                'url-preview'           => 'Xem Trước URL:',
                'headers'               => 'Tiêu Đề',
                'add-new-header'        => 'Thêm Tiêu Đề Mới',
                'body'                  => 'Nội Dung',
                'default'               => 'Mặc định',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Khóa và Giá trị',
                'add-new-payload'       => 'Thêm payload mới',
                'raw'                   => 'Thô',
                'general'               => 'Chung',
                'name'                  => 'Tên',
                'entity-type'           => 'Loại Đối Tượng',
                'insert-placeholder'    => 'Chèn Placeholder',
                'description'           => 'Mô Tả',
                'json'                  => 'Json',
                'text'                  => 'Văn bản',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Kho Hàng',
                'create-btn'     => 'Tạo Kho Hàng',
                'create-success' => 'Kho hàng đã được tạo thành công.',
                'name-exists'    => 'Tên kho hàng đã tồn tại.',
                'update-success' => 'Kho hàng đã được cập nhật thành công.',
                'delete-success' => 'Kho hàng đã được xóa thành công.',
                'delete-failed'  => 'Kho hàng không thể bị xóa.',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Tên',
                    'contact-name'    => 'Tên Liên Hệ',
                    'delete'          => 'Xóa',
                    'edit'            => 'Chỉnh sửa',
                    'view'            => 'Xem',
                    'created-at'      => 'Ngày Tạo',
                    'products'        => 'Sản Phẩm',
                    'contact-emails'  => 'Email Liên Hệ',
                    'contact-numbers' => 'Số Điện Thoại Liên Hệ',
                ],
            ],

            'create' => [
                'title'         => 'Tạo Kho Hàng',
                'save-btn'      => 'Lưu Kho Hàng',
                'contact-info'  => 'Thông Tin Liên Hệ',
            ],

            'edit' => [
                'title'         => 'Chỉnh Sửa Kho Hàng',
                'save-btn'      => 'Lưu Kho Hàng',
                'contact-info'  => 'Thông Tin Liên Hệ',
            ],

            'view' => [
                'all'         => 'Tất Cả',
                'notes'       => 'Ghi Chú',
                'files'       => 'Tệp',
                'location'    => 'Vị Trí',
                'change-logs' => 'Nhật Ký Thay Đổi',

                'locations' => [
                    'action'         => 'Hành Động',
                    'add-location'   => 'Thêm Vị Trí',
                    'create-success' => 'Vị trí đã được tạo thành công.',
                    'delete'         => 'Xóa',
                    'delete-failed'  => 'Vị trí không thể bị xóa.',
                    'delete-success' => 'Vị trí đã được xóa thành công.',
                    'name'           => 'Tên',
                    'save-btn'       => 'Lưu',
                ],

                'general-information' => [
                    'title' => 'Thông Tin Chung',
                ],

                'contact-information' => [
                    'title' => 'Thông Tin Liên Hệ',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'Thuộc Tính',
                'create-btn'         => 'Tạo Thuộc Tính',
                'create-success'     => 'Thuộc tính đã được tạo thành công.',
                'update-success'     => 'Thuộc tính đã được cập nhật thành công.',
                'delete-success'     => 'Thuộc tính đã được xóa thành công.',
                'delete-failed'      => 'Không thể xóa thuộc tính.',
                'user-define-error'  => 'Không thể xóa thuộc tính hệ thống.',
                'mass-delete-failed' => 'Các thuộc tính hệ thống không thể bị xóa.',

                'datagrid' => [
                    'yes'         => 'Có',
                    'no'          => 'Không',
                    'id'          => 'ID',
                    'code'        => 'Mã',
                    'name'        => 'Tên',
                    'entity-type' => 'Loại Thực Thể',
                    'type'        => 'Loại',
                    'is-default'  => 'Mặc Định',
                    'edit'        => 'Chỉnh sửa',
                    'delete'      => 'Xóa',

                    'entity-types' => [
                        'leads'         => 'Khách hàng tiềm năng',
                        'organizations' => 'Tổ chức',
                        'persons'       => 'Người',
                        'products'      => 'Sản phẩm',
                        'quotes'        => 'Báo giá',
                        'warehouses'    => 'Kho hàng',
                    ],

                    'types'       => [
                        'address'  => 'Địa chỉ',
                        'date'     => 'Ngày',
                        'email'    => 'Email',
                        'lookup'   => 'Tra cứu',
                        'phone'    => 'Điện thoại',
                        'price'    => 'Giá',
                        'select'   => 'Chọn',
                        'text'     => 'Văn bản',
                        'textarea' => 'Khung văn bản',
                    ],
                ],
            ],

            'create'  => [
                'actions'               => 'Hành Động',
                'add-attribute-options' => 'Thêm Tùy Chọn Thuộc Tính',
                'add-option'            => 'Thêm Tùy Chọn',
                'address'               => 'Địa Chỉ',
                'boolean'               => 'Boolean',
                'checkbox'              => 'Hộp Kiểm',
                'code'                  => 'Mã',
                'date'                  => 'Ngày',
                'datetime'              => 'Ngày Giờ',
                'decimal'               => 'Thập Phân',
                'email'                 => 'Email',
                'entity-type'           => 'Loại Thực Thể',
                'entity_type'           => 'Loại thực thể',
                'file'                  => 'Tệp',
                'general'               => 'Chung',
                'image'                 => 'Hình Ảnh',
                'input-validation'      => 'Xác Thực Đầu Vào',
                'is-required'           => 'Bắt Buộc',
                'is-unique'             => 'Là Độc Nhất',
                'is_required'           => 'Bắt Buộc',
                'is_unique'             => 'Là Độc Nhất',
                'labels'                => 'Nhãn',
                'lookup'                => 'Tra Cứu',
                'lookup-type'           => 'Loại Tra Cứu',
                'multiselect'           => 'Chọn Nhiều',
                'name'                  => 'Tên',
                'numeric'               => 'Số',
                'option-deleted'        => 'Tùy chọn thuộc tính đã được xóa thành công',
                'option-name'           => 'Tên Tùy Chọn',
                'option-type'           => 'Loại Tùy Chọn',
                'options'               => 'Tùy Chọn',
                'phone'                 => 'Điện Thoại',
                'price'                 => 'Giá',
                'save-btn'              => 'Lưu Thuộc Tính',
                'save-option'           => 'Lưu Tùy Chọn',
                'select'                => 'Chọn',
                'text'                  => 'Văn Bản',
                'textarea'              => 'Khung Văn Bản',
                'title'                 => 'Tạo Thuộc Tính',
                'type'                  => 'Loại',
                'url'                   => 'Url',
                'validations'           => 'Xác Thực',
            ],

            'edit'  => [
                'title'                 => 'Chỉnh Sửa Thuộc Tính',
                'save-btn'              => 'Lưu Thuộc Tính',
                'code'                  => 'Mã',
                'name'                  => 'Tên',
                'labels'                => 'Nhãn',
                'entity-type'           => 'Loại Thực Thể',
                'type'                  => 'Loại',
                'validations'           => 'Xác Thực',
                'is-required'           => 'Bắt Buộc',
                'input-validation'      => 'Xác Thực Đầu Vào',
                'is-unique'             => 'Là Độc Nhất',
                'general'               => 'Chung',
                'numeric'               => 'Số',
                'decimal'               => 'Thập Phân',
                'url'                   => 'Url',
                'options'               => 'Tùy Chọn',
                'option-type'           => 'Loại Tùy Chọn',
                'lookup-type'           => 'Loại Tra Cứu',
                'add-option'            => 'Thêm Tùy Chọn',
                'save-option'           => 'Lưu Tùy Chọn',
                'option-name'           => 'Tên Tùy Chọn',
                'add-attribute-options' => 'Thêm Tùy Chọn Thuộc Tính',
                'text'                  => 'Văn Bản',
                'textarea'              => 'Khung Văn Bản',
                'price'                 => 'Giá',
                'boolean'               => 'Boolean',
                'select'                => 'Chọn',
                'multiselect'           => 'Chọn Nhiều',
                'email'                 => 'Email',
                'address'               => 'Địa Chỉ',
                'phone'                 => 'Điện Thoại',
                'datetime'              => 'Ngày Giờ',
                'date'                  => 'Ngày',
                'image'                 => 'Hình Ảnh',
                'file'                  => 'Tệp',
                'lookup'                => 'Tra Cứu',
                'entity_type'           => 'Loại thực thể',
                'checkbox'              => 'Hộp Kiểm',
                'is_required'           => 'Bắt Buộc',
                'is_unique'             => 'Là Độc Nhất',
                'actions'               => 'Hành Động',
            ],
        ],

    ],

    'activities' => [
        'index' => [
            'title'      => 'Hoạt Động',

            'datagrid' => [
                'comment'       => 'Ghi Chú',
                'created_at'    => 'Thời Gian Tạo',
                'created_by'    => 'Người Tạo',
                'edit'          => 'Chỉnh Sửa',
                'id'            => 'ID',
                'done'          => 'Đã Hoàn Thành',
                'not-done'      => 'Chưa Hoàn Thành',
                'lead'          => 'Người Dẫn Dắt',
                'mass-delete'   => 'Xóa Hàng Loạt',
                'mass-update'   => 'Cập Nhật Hàng Loạt',
                'schedule-from' => 'Lịch Từ',
                'schedule-to'   => 'Lịch Đến',
                'schedule_from' => 'Lịch Từ',
                'schedule_to'   => 'Lịch Đến',
                'title'         => 'Tiêu Đề',
                'is_done'       => 'Đã Hoàn Thành',
                'type'          => 'Loại',
                'update'        => 'Cập Nhật',
                'call'          => 'Cuộc Gọi',
                'meeting'       => 'Cuộc Họp',
                'lunch'         => 'Bữa Trưa',
            ],
        ],

        'edit' => [
            'title'           => 'Chỉnh Sửa Hoạt Động',
            'back-btn'        => 'Quay Lại',
            'save-btn'        => 'Lưu Hoạt Động',
            'type'            => 'Loại Hoạt Động',
            'call'            => 'Cuộc Gọi',
            'meeting'         => 'Cuộc Họp',
            'lunch'           => 'Bữa Trưa',
            'schedule_to'     => 'Lịch Đến',
            'schedule_from'   => 'Lịch Từ',
            'location'        => 'Địa Điểm',
            'comment'         => 'Ghi Chú',
            'lead'            => 'Người Dẫn Dắt',
            'participants'    => 'Người Tham Gia',
            'general'         => 'Chung',
            'persons'         => 'Người',
            'no-result-found' => 'Không tìm thấy bản ghi.',
            'users'           => 'Người Dùng',
        ],

        'updated'              => 'Đã cập nhật :attribute',
        'created'              => 'Đã tạo',
        'duration-overlapping' => 'Người tham gia có một cuộc họp khác vào thời điểm này. Bạn có muốn tiếp tục không?',
        'create-success'       => 'Hoạt động được tạo thành công.',
        'update-success'       => 'Hoạt động được cập nhật thành công.',
        'overlapping-error'    => 'Người tham gia có một cuộc họp khác vào thời điểm này.',
        'destroy-success'      => 'Hoạt động đã được xóa thành công.',
        'delete-failed'        => 'Không thể xóa hoạt động.',
        'mass-update-success'  => 'Hoạt động được cập nhật thành công.',
        'mass-destroy-success' => 'Hoạt động đã được xóa thành công.',
        'mass-delete-failed'   => 'Không thể xóa hoạt động.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'Soạn Thư',
            'draft'             => 'Thư Nháp',
            'inbox'             => 'Hộp Thư Đến',
            'outbox'            => 'Hộp Thư Đi',
            'sent'              => 'Đã Gửi',
            'trash'             => 'Thùng Rác',
            'compose-mail-btn'  => 'Soạn Thư',
            'btn'               => 'Thư',
            'mail'              => [
                'title'         => 'Soạn Thư',
                'to'            => 'Đến',
                'enter-emails'  => 'Nhấn enter để thêm email',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => 'Chủ Đề',
                'send-btn'      => 'Gửi',
                'message'       => 'Tin Nhắn',
                'draft'         => 'Thư Nháp',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'Từ',
                'to'            => 'Đến',
                'subject'       => 'Chủ đề',
                'tags'          => 'Thẻ',
                'content'       => 'Nội dung',
                'attachments'   => 'Tệp đính kèm',
                'date'          => 'Ngày',
                'move-to-inbox' => 'Di chuyển vào hộp thư đến',
                'edit'          => 'Chỉnh sửa',
                'view'          => 'Xem',
                'delete'        => 'Xóa',
            ],
        ],

        'create-success'      => 'Email đã được gửi thành công.',
        'update-success'      => 'Email đã được cập nhật thành công.',
        'mass-update-success' => 'Các email đã được cập nhật thành công.',
        'delete-success'      => 'Email đã được xóa thành công.',
        'delete-failed'       => 'Email không thể bị xóa.',

        'view' => [
            'title'                      => 'Thư',
            'subject'                    => ':subject',
            'link-mail'                  => 'Liên Kết Thư',
            'to'                         => 'Đến',
            'cc'                         => 'CC',
            'bcc'                        => 'BCC',
            'reply'                      => 'Trả Lời',
            'reply-all'                  => 'Trả Lời Tất Cả',
            'forward'                    => 'Chuyển Tiếp',
            'delete'                     => 'Xóa',
            'enter-mails'                => 'Nhập ID email',
            'rotten-days'                => 'Người dẫn dắt đã hỏng trong :days ngày',
            'search-an-existing-lead'    => 'Tìm kiếm người dẫn dắt hiện có',
            'search-an-existing-contact' => 'Tìm kiếm liên hệ hiện có',
            'message'                    => 'Tin Nhắn',
            'add-attachments'            => 'Thêm Tệp Đính Kèm',
            'discard'                    => 'Bỏ Qua',
            'send'                       => 'Gửi',
            'no-result-found'            => 'Không tìm thấy kết quả',
            'add-new-contact'            => 'Thêm Liên Hệ Mới',
            'description'                => 'Mô Tả',
            'search'                     => 'Tìm kiếm...',
            'add-new-lead'               => 'Thêm Người Dẫn Dắt Mới',
            'create-new-contact'         => 'Tạo Liên Hệ Mới',
            'save-contact'               => 'Lưu Liên Hệ',
            'create-lead'                => 'Tạo Người Dẫn Dắt',
            'linked-contact'             => 'Liên Hệ Đã Liên Kết',
            'link-to-contact'            => 'Liên Kết Với Liên Hệ',
            'link-to-lead'               => 'Liên Kết Với Người Dẫn Dắt',
            'linked-lead'                => 'Người Dẫn Dắt Đã Liên Kết',
            'lead-details'               => 'Chi Tiết Người Dẫn Dắt',
            'contact-person'             => 'Người Liên Hệ',
            'product'                    => 'Sản Phẩm',

            'tags' => [
                'create-success'  => 'Thẻ đã được tạo thành công.',
                'destroy-success' => 'Thẻ đã được xóa thành công.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'add-more'             => 'Thêm Nữa',
            'address'              => 'Địa Chỉ',
            'city'                 => 'Thành Phố',
            'contact'              => 'Số Liên Lạc',
            'country'              => 'Quốc Gia',
            'email'                => 'Email',
            'home'                 => 'Nhà',
            'postcode'             => 'Mã Bưu Chính',
            'save'                 => 'Lưu',
            'select'               => 'Chọn',
            'select-country'       => 'Chọn Quốc Gia',
            'select-state'         => 'Chọn Bang',
            'state'                => 'Bang',
            'update-contact-title' => 'Cập Nhật Số Liên Lạc',
            'update-emails-title'  => 'Cập Nhật Email Liên Hệ',
            'work'                 => 'Công Việc',
        ],
    ],

    'leads' => [
        'create-success'    => 'Tạo khách hàng tiềm năng thành công.',
        'update-success'    => 'Cập nhật khách hàng tiềm năng thành công.',
        'destroy-success'   => 'Xóa khách hàng tiềm năng thành công.',
        'destroy-failed'    => 'Không thể xóa khách hàng tiềm năng.',

        'file' => [
            'empty-content'    => 'Nội dung PDF trống hoặc không thể trích xuất.',
            'invalid-format'   => 'Định dạng JSON không hợp lệ.',
            'invalid-response' => 'Định dạng phản hồi AI không hợp lệ.',
            'missing-api-key'  => 'Thiếu khóa API hoặc cấu hình mô hình.',
            'not-found'        => 'Không tìm thấy tệp.',
        ],

        'index' => [
            'title'      => 'Khách Hàng Tiềm Năng',
            'create-btn' => 'Tạo Khách Hàng Tiềm Năng',

            'datagrid' => [
                'contact-person'      => 'Người Liên Hệ',
                'created-at'          => 'Tạo Vào Lúc',
                'date-to'             => 'Ngày Đến',
                'delete'              => 'Xóa',
                'id'                  => 'ID',
                'lead-type'           => 'Loại Khách Hàng',
                'lead-value'          => 'Giá Trị Khách Hàng',
                'mass-delete'         => 'Xóa Hàng Loạt',
                'mass-update'         => 'Cập Nhật Hàng Loạt',
                'no'                  => 'Không',
                'rotten-lead'         => 'Khách Hàng Tiềm Năng Hết Hạn',
                'sales-person'        => 'Nhân Viên Kinh Doanh',
                'source'              => 'Nguồn',
                'stage'               => 'Giai Đoạn',
                'subject'             => 'Chủ Đề',
                'tag-name'            => 'Tên Thẻ',
                'yes'                 => 'Có',
            ],

            'kanban' => [
                'create-lead-btn'        => 'Tạo Khách Hàng Tiềm Năng',
                'empty-list'             => 'Danh sách khách hàng tiềm năng của bạn trống',
                'empty-list-description' => 'Tạo một khách hàng tiềm năng để tổ chức các mục tiêu của bạn.',
                'rotten-days'            => 'Khách hàng tiềm năng đã hết hạn trong :days ngày',

                'columns' => [
                    'contact-person'      => 'Người Liên Hệ',
                    'created-at'          => 'Tạo Vào Lúc',
                    'expected-close-date' => 'Ngày Dự Kiến Đóng',
                    'id'                  => 'ID',
                    'lead-type'           => 'Loại Khách Hàng',
                    'lead-value'          => 'Giá Trị Khách Hàng',
                    'sales-person'        => 'Nhân Viên Kinh Doanh',
                    'source'              => 'Nguồn',
                    'tags'                => 'Thẻ',
                    'title'               => 'Tiêu Đề',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Tìm Kiếm',
                    ],

                    'filters' => [
                        'apply-filters' => 'Áp Dụng Bộ Lọc',
                        'clear-all'     => 'Xóa Tất Cả',
                        'filter'        => 'Bộ Lọc',
                        'filters'       => 'Bộ Lọc',
                        'from'          => 'Từ',
                        'select'        => 'Chọn',
                        'to'            => 'Đến',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Tất Cả Các Quy Trình',
                'create-new-pipeline' => 'Tạo Quy Trình Mới',
            ],

            'upload' => [
                'create-lead'   => 'Tạo Khách Hàng Tiềm Năng Bằng AI',
                'file'          => 'Tải Lên Tệp',
                'file-info'     => 'Chỉ chấp nhận các tệp định dạng PDF.',
                'file-required' => 'Vui lòng chọn ít nhất một tệp hợp lệ để tiếp tục.',
                'sample-pdf'    => 'PDF Mẫu',
                'save-btn'      => 'Lưu',
                'upload-pdf'    => 'Tải Lên PDF',
            ],
        ],

        'create' => [
            'title'          => 'Tạo Khách Hàng Tiềm Năng',
            'save-btn'       => 'Lưu',
            'details'        => 'Chi Tiết',
            'details-info'   => 'Nhập Thông Tin Cơ Bản Của Khách Hàng Tiềm Năng',
            'contact-person' => 'Người Liên Hệ',
            'contact-info'   => 'Thông Tin Về Người Liên Hệ',
            'products'       => 'Sản Phẩm',
            'products-info'  => 'Thông Tin Về Sản Phẩm',
        ],

        'edit' => [
            'title'          => 'Chỉnh Sửa Khách Hàng Tiềm Năng',
            'save-btn'       => 'Lưu',
            'details'        => 'Chi Tiết',
            'details-info'   => 'Nhập Thông Tin Cơ Bản Của Khách Hàng Tiềm Năng',
            'contact-person' => 'Người Liên Hệ',
            'contact-info'   => 'Thông Tin Về Người Liên Hệ',
            'products'       => 'Sản Phẩm',
            'products-info'  => 'Thông Tin Về Sản Phẩm',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Tên',
                'email'          => 'Email',
                'contact-number' => 'Số Liên Lạc',
                'organization'   => 'Tổ Chức',
            ],

            'products' => [
                'product-name' => 'Tên Sản Phẩm',
                'quantity'     => 'Số Lượng',
                'price'        => 'Giá',
                'amount'       => 'Tổng Tiền',
                'action'       => 'Hành Động',
                'add-more'     => 'Thêm Nữa',
                'total'        => 'Tổng Cộng',
            ],
        ],

        'view' => [
            'title'       => 'Khách Hàng Tiềm Năng: :title',
            'rotten-days' => ':days Ngày',

            'tabs'        => [
                'description' => 'Mô Tả',
                'products'    => 'Sản Phẩm',
                'quotes'      => 'Báo Giá',
            ],

            'attributes' => [
                'title' => 'Về Khách Hàng Tiềm Năng',
            ],

            'quotes'=> [
                'subject'         => 'Chủ Đề',
                'expired-at'      => 'Hết Hạn Vào',
                'sub-total'       => 'Tạm Tính',
                'discount'        => 'Giảm Giá',
                'tax'             => 'Thuế',
                'adjustment'      => 'Điều Chỉnh',
                'grand-total'     => 'Tổng Cộng',
                'delete'          => 'Xóa',
                'edit'            => 'Chỉnh Sửa',
                'download'        => 'Tải Xuống',
                'destroy-success' => 'Xóa báo giá thành công.',
                'empty-title'     => 'Không Có Báo Giá',
                'empty-info'      => 'Không Có Báo Giá Cho Khách Hàng Tiềm Năng Này',
                'add-btn'         => 'Thêm Báo Giá',
            ],

            'products' => [
                'product-name' => 'Tên Sản Phẩm',
                'quantity'     => 'Số Lượng',
                'price'        => 'Giá',
                'amount'       => 'Tổng Tiền',
                'action'       => 'Hành Động',
                'add-more'     => 'Thêm Nữa',
                'total'        => 'Tổng Cộng',
                'empty-title'  => 'Không Có Sản Phẩm',
                'empty-info'   => 'Không Có Sản Phẩm Cho Khách Hàng Tiềm Năng Này',
                'add-product'  => 'Thêm Sản Phẩm',
            ],

            'persons' => [
                'title'     => 'Về Người Liên Hệ',
                'job-title' => ':job_title tại :organization',
            ],

            'stages' => [
                'won-lost'       => 'Thắng/Thua',
                'won'            => 'Thắng',
                'lost'           => 'Thua',
                'need-more-info' => 'Cần Thêm Thông Tin',
                'closed-at'      => 'Đóng Vào',
                'won-value'      => 'Giá Trị Thắng',
                'lost-reason'    => 'Lý Do Thua',
                'save-btn'       => 'Lưu',
            ],

            'tags' => [
                'create-success'  => 'Tạo thẻ thành công.',
                'destroy-success' => 'Xóa thẻ thành công.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'           => 'Quay lại',
            'delete'         => 'Xóa',
            'save-btn'       => 'Lưu Cấu hình',
            'save-success'   => 'Cấu hình đã được lưu thành công.',
            'search'         => 'Tìm kiếm',
            'select-country' => 'Chọn Quốc gia',
            'select-state'   => 'Chọn Bang',
            'title'          => 'Cấu hình',

            'general'  => [
                'title'   => 'Chung',
                'info'    => 'Cấu hình chung',

                'general' => [
                    'title'           => 'Chung',
                    'info'            => 'Cập nhật cài đặt chung của bạn tại đây.',
                    'locale-settings' => [
                        'title'       => 'Cài đặt ngôn ngữ',
                        'title-info'  => 'Định nghĩa ngôn ngữ được sử dụng trong giao diện người dùng, như tiếng Ả Rập (ar), tiếng Anh (en), tiếng Tây Ban Nha (es), tiếng Ba Tư (fa) và tiếng Thổ Nhĩ Kỳ (tr).',
                    ],

                    'admin-logo' => [
                        'logo-image' => 'Hình ảnh Logo',
                        'title'      => 'Logo Quản trị',
                        'title-info' => 'Cấu hình hình ảnh logo cho bảng điều khiển quản trị của bạn.',
                    ],
                ],
            ],

            'email' => [
                'title' => 'Cài đặt Email',
                'info'  => 'Cấu hình email cho ứng dụng.',

                'imap' => [
                    'title' => 'Cài đặt IMAP',
                    'info'  => 'Cấu hình email IMAP để nhận email.',

                    'account' => [
                        'title'         => 'Tài khoản IMAP',
                        'title-info'    => 'Cấu hình cài đặt tài khoản IMAP của bạn tại đây.',
                        'host'          => 'Máy chủ',
                        'port'          => 'Cổng',
                        'encryption'    => 'Loại mã hóa',
                        'validate-cert' => 'Xác thực chứng chỉ SSL',
                        'username'      => 'Tên người dùng IMAP',
                        'password'      => 'Mật khẩu IMAP',
                    ],
                ],
            ],

            'magic-ai' => [
                'title' => 'Magic AI',
                'info'  => 'Cấu hình Magic AI cho ứng dụng.',

                'settings' => [
                    'accepted-types'      => 'Các loại tệp được chấp nhận',
                    'accepted-types-info' => 'Danh sách các loại tệp được chấp nhận cho việc tạo PDF, cách nhau bằng dấu phẩy.',
                    'api-domain'          => 'Tên miền API LLM',
                    'api-domain-info'     => 'Dành cho Olama và Grow, Ví dụ: http://localhost:11434',
                    'api-key'             => 'Khóa API',
                    'api-key-info'        => 'Hãy đảm bảo rằng bạn sử dụng một khóa API duy nhất cho mỗi loại mô hình để duy trì hiệu suất và bảo mật tối ưu.',
                    'enable'              => 'Kích hoạt',
                    'info'                => 'Nâng cao trải nghiệm của bạn với tính năng Magic AI bằng cách nhập Khóa API độc quyền của bạn và chỉ định tích hợp dễ dàng. Nắm quyền kiểm soát thông tin đăng nhập OpenAI của bạn và tùy chỉnh cài đặt theo nhu cầu cụ thể của bạn.',
                    'pdf-generation'      => 'Tạo PDF',
                    'pdf-generation-info' => 'Kích hoạt tính năng Tạo PDF để tự động trích xuất dữ liệu từ các tệp PDF và chuyển đổi chúng thành định dạng văn bản. Nâng cao năng suất và hiệu quả của bạn bằng cách kích hoạt tính năng này để tối ưu hóa quy trình làm việc của bạn.',
                    'title'               => 'Cài đặt chung',

                    'models'     => [
                        'deepseek-r1'  => 'DeepSeek-R1 8db',
                        'gemini-flash' => 'Gemini-1.5 Flash',
                        'gpt-4o'       => 'GPT-4.0',
                        'gpt-4o-mini'  => 'GPT-4.0 mini',
                        'llama'        => 'Llama 3.3 (Groq)',
                        'ollama'       => 'Ollama (llama3.2:latest)',
                        'title'        => 'Mô hình',
                        'title'        => 'Cài đặt Ngôn ngữ',
                        'title-info'   => 'Định nghĩa ngôn ngữ sử dụng trong giao diện người dùng, như tiếng Ả Rập (ar), tiếng Anh (en), tiếng Tây Ban Nha (es), tiếng Ba Tư (fa) và tiếng Thổ Nhĩ Kỳ (tr).',
                    ],
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',
                'info'  => 'Cập nhật cài đặt của bạn tại đây.',

                'footer' => [
                    'info'       => 'Chúng tôi có thể cấu hình phần powered by tại đây.',
                    'powered-by' => 'Được hỗ trợ bởi trình chỉnh sửa văn bản',
                    'title'      => 'Cấu hình Phần Powered by',
                ],

                'menu' => [
                    'activities'     => 'Hoạt động',
                    'configuration'  => 'Cấu hình',
                    'contacts'       => 'Liên hệ',
                    'dashboard'      => 'Bảng điều khiển',
                    'draft'          => 'Thư nháp',
                    'inbox'          => 'Hộp thư đến',
                    'info'           => 'Chúng tôi có thể cấu hình tên các mục menu tại đây.',
                    'leads'          => 'Khách hàng tiềm năng',
                    'mail'           => 'Thư',
                    'organizations'  => 'Tổ chức',
                    'outbox'         => 'Hộp thư đi',
                    'persons'        => 'Người',
                    'products'       => 'Sản phẩm',
                    'quotes'         => 'Báo giá',
                    'sent'           => 'Đã gửi',
                    'settings'       => 'Cài đặt',
                    'title'          => 'Cấu hình Mục Menu',
                    'trash'          => 'Thùng rác',
                ],

                'menu-color' => [
                    'active-background-color' => 'Màu nền Hoạt động',
                    'active-text-color'       => 'Màu chữ Hoạt động',
                    'info'                    => 'Chúng tôi có thể thay đổi màu các mục menu tại đây.',
                    'text-color'              => 'Màu chữ',
                    'title'                   => 'Cấu hình Màu Mục Menu',
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Bảng Điều Khiển',

            'revenue' => [
                'lost-revenue' => 'Doanh Thu Bị Mất',
                'won-revenue'  => 'Doanh Thu Đã Đạt',
            ],

            'over-all' => [
                'average-lead-value'    => 'Giá Trị Lead Trung Bình',
                'total-leads'           => 'Tổng Số Lead',
                'average-leads-per-day' => 'Số Lead Trung Bình Mỗi Ngày',
                'total-quotations'      => 'Tổng Số Báo Giá',
                'total-persons'         => 'Tổng Số Người Liên Hệ',
                'total-organizations'   => 'Tổng Số Tổ Chức',
            ],

            'total-leads' => [
                'title' => 'Leads',
                'total' => 'Tổng Số Lead',
                'won'   => 'Lead Đã Đạt',
                'lost'  => 'Lead Bị Mất',
            ],

            'revenue-by-sources' => [
                'title'       => 'Doanh Thu Theo Nguồn',
                'empty-title' => 'Không Có Dữ Liệu',
                'empty-info'  => 'Không có dữ liệu cho khoảng thời gian được chọn',
            ],

            'revenue-by-types' => [
                'title'       => 'Doanh Thu Theo Loại',
                'empty-title' => 'Không Có Dữ Liệu',
                'empty-info'  => 'Không có dữ liệu cho khoảng thời gian được chọn',
            ],

            'top-selling-products' => [
                'title'       => 'Sản Phẩm Bán Chạy Nhất',
                'empty-title' => 'Không Tìm Thấy Sản Phẩm',
                'empty-info'  => 'Không có sản phẩm nào cho khoảng thời gian được chọn',
            ],

            'top-persons' => [
                'title'       => 'Người Liên Hệ Hàng Đầu',
                'empty-title' => 'Không Tìm Thấy Người Liên Hệ',
                'empty-info'  => 'Không có người liên hệ nào cho khoảng thời gian được chọn',
            ],

            'open-leads-by-states' => [
                'title'       => 'Khách hàng tiềm năng mở theo giai đoạn',
                'empty-title' => 'Không Có Dữ Liệu',
                'empty-info'  => 'Không có dữ liệu cho khoảng thời gian được chọn',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Phiên Bản : :version',
        'dashboard'            => 'Bảng Điều Khiển',
        'leads'                => 'Leads',
        'quotes'               => 'Báo Giá',
        'quote'                => 'Báo Giá',
        'mail'                 => [
            'title'   => 'Thư',
            'compose' => 'Soạn Thư',
            'inbox'   => 'Hộp Thư Đến',
            'draft'   => 'Thư Nháp',
            'outbox'  => 'Hộp Thư Đi',
            'sent'    => 'Đã Gửi',
            'trash'   => 'Thùng Rác',
            'setting' => 'Cài Đặt',
        ],
        'activities'           => 'Hoạt Động',
        'contacts'             => 'Liên Hệ',
        'persons'              => 'Người Liên Hệ',
        'person'               => 'Người Liên Hệ',
        'organizations'        => 'Tổ Chức',
        'organization'         => 'Tổ Chức',
        'products'             => 'Sản Phẩm',
        'product'              => 'Sản Phẩm',
        'settings'             => 'Cài Đặt',
        'user'                 => 'Người Dùng',
        'user-info'            => 'Quản lý tất cả người dùng và quyền hạn của họ trong CRM, những gì họ được phép làm.',
        'groups'               => 'Nhóm',
        'groups-info'          => 'Thêm, chỉnh sửa hoặc xóa nhóm khỏi CRM',
        'roles'                => 'Vai Trò',
        'role'                 => 'Vai Trò',
        'roles-info'           => 'Thêm, chỉnh sửa hoặc xóa vai trò khỏi CRM',
        'users'                => 'Người Dùng',
        'users-info'           => 'Thêm, chỉnh sửa hoặc xóa người dùng khỏi CRM',
        'lead'                 => 'Lead',
        'lead-info'            => 'Quản lý tất cả các cài đặt liên quan đến leads trong CRM',
        'pipelines'            => 'Pipelines',
        'pipelines-info'       => 'Thêm, chỉnh sửa hoặc xóa pipelines khỏi CRM',
        'sources'              => 'Nguồn',
        'sources-info'         => 'Thêm, chỉnh sửa hoặc xóa nguồn khỏi CRM',
        'types'                => 'Loại',
        'types-info'           => 'Thêm, chỉnh sửa hoặc xóa loại khỏi CRM',
        'automation'           => 'Tự Động Hóa',
        'automation-info'      => 'Quản lý tất cả các cài đặt liên quan đến tự động hóa trong CRM',
        'attributes'           => 'Thuộc Tính',
        'attribute'            => 'Thuộc Tính',
        'attributes-info'      => 'Thêm, chỉnh sửa hoặc xóa thuộc tính khỏi CRM',
        'email-templates'      => 'Mẫu Email',
        'email'                => 'Email',
        'email-templates-info' => 'Thêm, chỉnh sửa hoặc xóa mẫu email khỏi CRM',
        'events'               => 'Sự kiện',
        'events-info'          => 'Thêm, chỉnh sửa hoặc xóa sự kiện từ CRM',
        'campaigns'            => 'Chiến dịch',
        'campaigns-info'       => 'Thêm, chỉnh sửa hoặc xóa chiến dịch từ CRM',
        'workflows'            => 'Quy Trình',
        'workflows-info'       => 'Thêm, chỉnh sửa hoặc xóa quy trình khỏi CRM',
        'webhooks'             => 'Webhook',
        'webhooks-info'        => 'Thêm, chỉnh sửa hoặc xóa webhook từ CRM',
        'other-settings'       => 'Cài Đặt Khác',
        'other-settings-info'  => 'Quản lý tất cả các cài đặt khác trong CRM',
        'tags'                 => 'Thẻ',
        'tags-info'            => 'Thêm, chỉnh sửa hoặc xóa thẻ khỏi CRM',
        'my-account'           => 'Tài Khoản Của Tôi',
        'sign-out'             => 'Đăng Xuất',
        'back'                 => 'Quay lại',
        'name'                 => 'Tên',
        'configuration'        => 'Cấu hình',
        'howdy'                => 'Xin chào!',
        'warehouses'           => 'Kho hàng',
        'warehouse'            => 'Kho hàng',
        'warehouses-info'      => 'Thêm, chỉnh sửa hoặc xóa kho hàng từ CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'Tên',
            'email'                 => 'Email',
            'password'              => 'Mật Khẩu',
            'my_account'            => 'Tài Khoản Của Tôi',
            'update_details'        => 'Cập Nhật Thông Tin',
            'current_password'      => 'Mật Khẩu Hiện Tại',
            'confirm_password'      => 'Xác Nhận Mật Khẩu',
            'password-match'        => 'Mật khẩu hiện tại không khớp.',
            'account-save'          => 'Thay đổi tài khoản đã được lưu thành công.',
            'permission-denied'     => 'Từ Chối Quyền Truy Cập',
            'remove-image'          => 'Xóa Hình Ảnh',
            'upload_image_pix'      => 'Tải Lên Ảnh Hồ Sơ (100px x 100px)',
            'upload_image_format'   => 'Định Dạng PNG hoặc JPG',
            'image_upload_message'  => 'Chỉ chấp nhận hình ảnh (.jpeg, .jpg, .png, ..).',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Kính gửi :name',
            'cheers' => 'Trân trọng,</br>Đội ngũ :app_name',

            'user'   => [
                'dear'           => 'Kính gửi :username',
                'create-subject' => 'Bạn đã được thêm làm thành viên.',
                'create-body'    => 'Chúc mừng! Bạn đã trở thành thành viên của đội ngũ chúng tôi.',

                'forget-password' => [
                    'subject'           => 'Khách hàng yêu cầu đặt lại mật khẩu',
                    'dear'              => 'Kính gửi :username',
                    'reset-password'    => 'Đặt Lại Mật Khẩu',
                    'info'              => 'Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.',
                    'final-summary'     => 'Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm hành động nào.',
                    'thanks'            => 'Cảm ơn!',
                ],
            ],
        ],
    ],

    'errors' => [
        'dashboard' => 'Bảng điều khiển',
        'go-back'   => 'Quay lại',
        'support'   => 'Nếu sự cố vẫn tiếp diễn, vui lòng liên hệ với chúng tôi tại <a href=":link" class=":class">:email</a> để được hỗ trợ.',

        '404' => [
            'description' => 'Rất tiếc! Trang bạn đang tìm kiếm hiện không có ở đây. Có vẻ như chúng tôi không thể tìm thấy những gì bạn đang tìm kiếm.',
            'title'       => '404 Không Tìm Thấy Trang',
        ],

        '401' => [
            'description' => 'Rất tiếc! Có vẻ như bạn không được phép truy cập vào trang này. Có vẻ bạn đang thiếu thông tin xác thực cần thiết.',
            'title'       => '401 Không Được Phép',
        ],

        '403' => [
            'description' => 'Rất tiếc! Trang này bị hạn chế. Có vẻ bạn không có quyền truy cập vào nội dung này.',
            'title'       => '403 Cấm Truy Cập',
        ],

        '500' => [
            'description' => 'Rất tiếc! Đã xảy ra sự cố. Có vẻ như chúng tôi đang gặp khó khăn trong việc tải trang mà bạn đang tìm kiếm.',
            'title'       => '500 Lỗi Máy Chủ Nội Bộ',
        ],

        '503' => [
            'description' => 'Rất tiếc! Có vẻ chúng tôi đang tạm ngừng để bảo trì. Vui lòng quay lại sau.',
            'title'       => '503 Dịch Vụ Không Khả Dụng',
        ],
    ],

    'export' => [
        'csv'        => 'CSV',
        'download'   => 'Tải Xuống',
        'export'     => 'Xuất',
        'no-records' => 'Không có bản ghi nào được tìm thấy.',
        'xls'        => 'XLS',
        'xlsx'       => 'XLSX',
    ],
];
