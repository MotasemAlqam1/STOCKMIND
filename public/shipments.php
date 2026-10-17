
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>الشحنات الواردة | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    >

    <!-- Shared Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="dashboard-page">

    <div class="container-fluid">
        <div class="row">

            <!-- ==================================
                 SIDEBAR
            =================================== -->
            <aside class="col-12 col-lg-3 col-xl-2 dashboard-sidebar">

                <a href="dashboard.php"
                   class="dashboard-brand text-decoration-none">
                    STOCK<span>MIND</span>
                </a>

                <p class="sidebar-label">القائمة الرئيسية</p>

                <nav aria-label="القائمة الرئيسية للوحة التحكم">

                    <ul class="sidebar-menu list-unstyled">

                        <li>
                            <a href="dashboard.php" class="sidebar-link">
                                <span aria-hidden="true">▦</span>
                                نظرة عامة
                            </a>
                        </li>

                        <li>
                            <a href="warehouses.php" class="sidebar-link">
                                <span aria-hidden="true">▤</span>
                                المستودعات
                            </a>
                        </li>

                        <li>
                            <a href="parts.php" class="sidebar-link">
                                <span aria-hidden="true">▣</span>
                                قطع الغيار
                            </a>
                        </li>

                        <li>
                            <a href="stock-movements.php"
                               class="sidebar-link">
                                <span aria-hidden="true">↔</span>
                                حركات المخزون
                            </a>
                        </li>

                        <li>
                            <a href="suppliers.php" class="sidebar-link">
                                <span aria-hidden="true">♧</span>
                                الموردون
                            </a>
                        </li>

                        <li>
                            <a href="purchase-orders.php"
                               class="sidebar-link">
                                <span aria-hidden="true">▧</span>
                                طلبات الشراء
                            </a>
                        </li>

                        <li>
                            <a href="shipments.php"
                               class="sidebar-link active"
                               aria-current="page">
                                <span aria-hidden="true">↧</span>
                                الشحنات
                            </a>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">▥</span>
                                التقارير
                            </span>
                        </li>

                    </ul>

                </nav>

                <div class="sidebar-bottom">
                    <a href="index.php" class="sidebar-link">
                        <span aria-hidden="true">⌂</span>
                        العودة إلى الموقع
                    </a>
                </div>

            </aside>

            <!-- ==================================
                 MAIN CONTENT
            =================================== -->
            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            إدارة الشحنات الواردة
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            متابعة الشحنات والاستلام وفحص الكميات
                        </p>
                    </div>

                    <div class="dashboard-user">

                        <span class="demo-label">Demo Mode</span>

                        <div class="user-avatar" aria-hidden="true">
                            M
                        </div>

                        <div class="user-details d-none d-sm-block">
                            <strong>مدير الشركة</strong>
                            <small>Manager</small>
                        </div>

                    </div>

                </header>

                <div class="dashboard-content">

                    <!-- ==================================
                         WELCOME SECTION
                    =================================== -->
                    <section class="dashboard-welcome mb-4">

                        <h2>الشحنات والاستلام</h2>

                        <p class="mb-0">
                            تابع الشحنات القادمة من الموردين،
                            وراجع كميات قطع الغيار عند وصولها
                            قبل إضافتها إلى المخزون.
                        </p>

                    </section>

                    <!-- ==================================
                         KPI CARDS
                    =================================== -->
                    <section class="mb-4"
                             aria-labelledby="shipmentStatsTitle">

                        <h2 id="shipmentStatsTitle"
                            class="content-heading">
                            ملخص الشحنات
                        </h2>

                        <div class="row g-3">

                            <!-- Total -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon"
                                         aria-hidden="true">📦</div>

                                    <p>إجمالي الشحنات</p>
                                    <h3>12</h3>
                                    <small>شحنة مسجلة</small>

                                </div>
                            </div>

                            <!-- In Transit -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon purple-icon"
                                         aria-hidden="true">🚚</div>

                                    <p>قيد النقل</p>
                                    <h3>5</h3>
                                    <small>شحنات في الطريق</small>

                                </div>
                            </div>

                            <!-- Inspection -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon"
                                         aria-hidden="true">🔍</div>

                                    <p>قيد الفحص</p>
                                    <h3>4</h3>
                                    <small>بانتظار اعتماد الاستلام</small>

                                </div>
                            </div>

                            <!-- Received -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon"
                                         aria-hidden="true">✓</div>

                                    <p>استلام مؤكد</p>
                                    <h3>3</h3>
                                    <small>شحنات تم اعتمادها</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- ==================================
                         SHIPMENTS TABLE
                    =================================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="shipmentsTableTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="shipmentsTableTitle">
                                    قائمة الشحنات
                                </h2>

                                <p>
                                    متابعة حالة الشحنات ومواعيد الوصول
                                </p>
                            </div>

                            <a href="#add-shipment"
                               class="btn btn-primary btn-sm">
                                + شحنة جديدة
                            </a>

                        </div>

                        <!-- Filters: Visual Only -->
                        <div class="row g-3 mb-4">

                            <div class="col-12 col-md-6">

                                <label for="shipmentSearch"
                                       class="form-label">
                                    البحث عن شحنة
                                </label>

                                <input
                                    type="search"
                                    id="shipmentSearch"
                                    class="form-control"
                                    placeholder="رقم الشحنة أو رقم الطلب أو المورد"
                                >

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="shipmentStatusFilter"
                                       class="form-label">
                                    حالة الشحنة
                                </label>

                                <select
                                    id="shipmentStatusFilter"
                                    class="form-select"
                                >
                                    <option value="">جميع الحالات</option>
                                    <option>قيد النقل</option>
                                    <option>قيد الفحص</option>
                                    <option>استلام مؤكد</option>
                                </select>

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="shipmentOriginFilter"
                                       class="form-label">
                                    بلد الشحن
                                </label>

                                <select
                                    id="shipmentOriginFilter"
                                    class="form-select"
                                >
                                    <option value="">جميع الدول</option>
                                    <option>كوريا الجنوبية</option>
                                    <option>الصين</option>
                                    <option>عُمان</option>
                                    <option>الأردن</option>
                                </select>

                            </div>

                        </div>

                        <!-- Responsive Table -->
                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">رقم الشحنة</th>
                                        <th scope="col">طلب الشراء</th>
                                        <th scope="col">المورد</th>
                                        <th scope="col">بلد الشحن</th>
                                        <th scope="col">تاريخ الإرسال</th>
                                        <th scope="col">الوصول المتوقع</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td><strong>SHP-1001</strong></td>
                                        <td>PO-1001</td>
                                        <td>Korea Auto Parts</td>
                                        <td>كوريا الجنوبية</td>
                                        <td>2026-10-10</td>
                                        <td>2026-10-25</td>
                                        <td>
                                            <span class="badge text-bg-primary">
                                                قيد النقل
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SHP-1002</strong></td>
                                        <td>PO-1002</td>
                                        <td>China Parts Trading</td>
                                        <td>الصين</td>
                                        <td>2026-10-12</td>
                                        <td>2026-10-16</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                قيد الفحص
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SHP-1003</strong></td>
                                        <td>PO-1003</td>
                                        <td>Amman Auto Supplies</td>
                                        <td>الأردن</td>
                                        <td>2026-09-23</td>
                                        <td>2026-09-28</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                استلام مؤكد
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SHP-1004</strong></td>
                                        <td>PO-1004</td>
                                        <td>Gulf Spare Parts</td>
                                        <td>عُمان</td>
                                        <td>2026-10-14</td>
                                        <td>2026-10-30</td>
                                        <td>
                                            <span class="badge text-bg-primary">
                                                قيد النقل
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SHP-1005</strong></td>
                                        <td>PO-0998</td>
                                        <td>Korea Auto Parts</td>
                                        <td>كوريا الجنوبية</td>
                                        <td>2026-10-08</td>
                                        <td>2026-10-17</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                قيد الفحص
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <p class="inventory-helper-text mt-3 mb-0">
                            الجدول يعرض خمس شحنات تجريبية.
                            حالات الشحنات لا تتغير تلقائيًا
                            في هذه المرحلة.
                        </p>

                    </section>

                    <!-- ==================================
                         ADD SHIPMENT FORM
                    =================================== -->
                    <section id="add-shipment"
                             class="dashboard-panel mb-4"
                             aria-labelledby="addShipmentTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="addShipmentTitle">
                                    تسجيل شحنة واردة
                                </h2>

                                <p>
                                    ربط الشحنة بطلب شراء وتسجيل معلومات النقل
                                </p>
                            </div>

                        </div>

                        <form>

                            <div class="row g-3">

                                <!-- Shipment Number -->
                                <div class="col-12 col-md-6">

                                    <label for="shipmentNumber"
                                           class="form-label">
                                        رقم الشحنة
                                    </label>

                                    <input
                                        type="text"
                                        id="shipmentNumber"
                                        class="form-control"
                                        placeholder="سيُنشأ تلقائيًا لاحقًا"
                                        readonly
                                    >

                                </div>

                                <!-- Purchase Order -->
                                <div class="col-12 col-md-6">

                                    <label for="shipmentOrder"
                                           class="form-label">
                                        طلب الشراء المرتبط
                                    </label>

                                    <select
                                        id="shipmentOrder"
                                        name="purchase_order_id"
                                        class="form-select"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            اختر طلب الشراء
                                        </option>
                                        <option value="1001">
                                            PO-1001 — Korea Auto Parts
                                        </option>
                                        <option value="1002">
                                            PO-1002 — China Parts Trading
                                        </option>
                                        <option value="1004">
                                            PO-1004 — Gulf Spare Parts
                                        </option>
                                    </select>

                                </div>

                                <!-- Tracking Number -->
                                <div class="col-12 col-md-6">

                                    <label for="trackingNumber"
                                           class="form-label">
                                        رقم التتبع
                                    </label>

                                    <input
                                        type="text"
                                        id="trackingNumber"
                                        name="tracking_number"
                                        class="form-control"
                                        placeholder="مثال: TRK-2026-001"
                                    >

                                </div>

                                <!-- Shipping Method -->
                                <div class="col-12 col-md-6">

                                    <label for="shippingMethod"
                                           class="form-label">
                                        طريقة الشحن
                                    </label>

                                    <select
                                        id="shippingMethod"
                                        name="shipping_method"
                                        class="form-select"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            اختر طريقة الشحن
                                        </option>
                                        <option value="sea">بحري</option>
                                        <option value="air">جوي</option>
                                        <option value="land">بري</option>
                                    </select>

                                </div>

                                <!-- Origin -->
                                <div class="col-12 col-md-6">

                                    <label for="shipmentOrigin"
                                           class="form-label">
                                        بلد الشحن
                                    </label>

                                    <select
                                        id="shipmentOrigin"
                                        name="origin_country"
                                        class="form-select"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            اختر الدولة
                                        </option>
                                        <option value="KR">كوريا الجنوبية</option>
                                        <option value="CN">الصين</option>
                                        <option value="OM">عُمان</option>
                                        <option value="JO">الأردن</option>
                                        <option value="AE">الإمارات</option>
                                    </select>

                                </div>

                                <!-- Destination Warehouse -->
                                <div class="col-12 col-md-6">

                                    <label for="shipmentWarehouse"
                                           class="form-label">
                                        مستودع الاستلام المخطط
                                    </label>

                                    <select
                                        id="shipmentWarehouse"
                                        name="warehouse_id"
                                        class="form-select"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            اختر المستودع
                                        </option>
                                        <option value="1">
                                            المستودع الرئيسي
                                        </option>
                                        <option value="2">
                                            مستودع الزرقاء
                                        </option>
                                        <option value="3">
                                            مستودع عمّان
                                        </option>
                                    </select>

                                </div>

                                <!-- Shipping Date -->
                                <div class="col-12 col-md-6">

                                    <label for="shippingDate"
                                           class="form-label">
                                        تاريخ الإرسال
                                    </label>

                                    <input
                                        type="date"
                                        id="shippingDate"
                                        name="shipping_date"
                                        class="form-control"
                                        required
                                    >

                                </div>

                                <!-- Expected Arrival -->
                                <div class="col-12 col-md-6">

                                    <label for="arrivalDate"
                                           class="form-label">
                                        تاريخ الوصول المتوقع
                                    </label>

                                    <input
                                        type="date"
                                        id="arrivalDate"
                                        name="expected_arrival"
                                        class="form-control"
                                    >

                                </div>

                                <!-- Notes -->
                                <div class="col-12">

                                    <label for="shipmentNotes"
                                           class="form-label">
                                        ملاحظات الشحنة
                                    </label>

                                    <textarea
                                        id="shipmentNotes"
                                        name="notes"
                                        rows="3"
                                        class="form-control"
                                        placeholder="تفاصيل الحاوية أو شركة الشحن أو أي ملاحظات"
                                    ></textarea>

                                </div>

                            </div>

                            <div class="alert alert-info mt-4" role="note">
                                تسجيل الشحنة لا يعني استلام
                                قطع الغيار ولا يزيد المخزون.
                                يتم تحديث الكميات فقط
                                بعد فحصها وتأكيد الاستلام.
                            </div>

                            <button type="button"
                                    class="btn btn-primary">
                                تسجيل الشحنة (عرض فقط)
                            </button>

                        </form>

                    </section>

                    <!-- ==================================
                         RECEIVING INSPECTION
                    =================================== -->
                    <section id="receiving-inspection"
                             class="dashboard-panel"
                             aria-labelledby="receivingTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="receivingTitle">
                                    فحص واستلام قطع الغيار
                                </h2>

                                <p>
                                    مثال على مراجعة كميات شحنة وصلت إلى المستودع
                                </p>
                            </div>

                            <span class="badge text-bg-warning">
                                قيد الفحص
                            </span>

                        </div>

                        <div class="shipment-receiving-info mb-4">

                            <div>
                                <small>رقم الشحنة</small>
                                <strong>SHP-1005</strong>
                            </div>

                            <div>
                                <small>المورد</small>
                                <strong>Korea Auto Parts</strong>
                            </div>

                            <div>
                                <small>مستودع الاستلام</small>
                                <strong>المستودع الرئيسي</strong>
                            </div>

                        </div>

                        <form>

                            <div class="table-responsive">

                                <table class="table dashboard-table align-middle">

                                    <thead>
                                        <tr>
                                            <th scope="col">القطعة</th>
                                            <th scope="col">Expected</th>
                                            <th scope="col">Received</th>
                                            <th scope="col">Damaged</th>
                                            <th scope="col">Missing</th>
                                            <th scope="col">Accepted</th>
                                            <th scope="col">المستودع / الرف</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <!-- Item 1 -->
                                        <tr>
                                            <th scope="row">
                                                Brake Pads
                                                <small class="d-block text-muted">
                                                    SM-1001
                                                </small>
                                            </th>

                                            <td>100</td>

                                            <td>
                                                <input
                                                    type="number"
                                                    class="form-control receiving-quantity"
                                                    aria-label="الكمية المستلمة من Brake Pads"
                                                    value="95"
                                                    min="0"
                                                >
                                            </td>

                                            <td>
                                                <input
                                                    type="number"
                                                    class="form-control receiving-quantity"
                                                    aria-label="الكمية التالفة من Brake Pads"
                                                    value="5"
                                                    min="0"
                                                >
                                            </td>

                                            <td>
                                                <input
                                                    type="number"
                                                    class="form-control receiving-quantity"
                                                    aria-label="الكمية الناقصة من Brake Pads"
                                                    value="5"
                                                    min="0"
                                                >
                                            </td>

                                            <td>
                                                <strong class="text-success">
                                                    90
                                                </strong>
                                            </td>

                                            <td>
                                                <select
                                                    class="form-select receiving-location"
                                                    aria-label="موقع تخزين Brake Pads"
                                                >
                                                    <option>الرئيسي / A1</option>
                                                    <option>الرئيسي / A2</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <!-- Item 2 -->
                                        <tr>
                                            <th scope="row">
                                                Oil Filter
                                                <small class="d-block text-muted">
                                                    SM-1002
                                                </small>
                                            </th>

                                            <td>50</td>

                                            <td>
                                                <input
                                                    type="number"
                                                    class="form-control receiving-quantity"
                                                    aria-label="الكمية المستلمة من Oil Filter"
                                                    value="50"
                                                    min="0"
                                                >
                                            </td>

                                            <td>
                                                <input
                                                    type="number"
                                                    class="form-control receiving-quantity"
                                                    aria-label="الكمية التالفة من Oil Filter"
                                                    value="0"
                                                    min="0"
                                                >
                                            </td>

                                            <td>
                                                <input
                                                    type="number"
                                                    class="form-control receiving-quantity"
                                                    aria-label="الكمية الناقصة من Oil Filter"
                                                    value="0"
                                                    min="0"
                                                >
                                            </td>

                                            <td>
                                                <strong class="text-success">
                                                    50
                                                </strong>
                                            </td>

                                            <td>
                                                <select
                                                    class="form-select receiving-location"
                                                    aria-label="موقع تخزين Oil Filter"
                                                >
                                                    <option>الرئيسي / B1</option>
                                                    <option>الرئيسي / B2</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <div class="shipment-summary mt-4">

                                <div>
                                    <span>Expected Total</span>
                                    <strong>150</strong>
                                </div>

                                <div>
                                    <span>Received Total</span>
                                    <strong>145</strong>
                                </div>

                                <div>
                                    <span>Damaged Total</span>
                                    <strong>5</strong>
                                </div>

                                <div>
                                    <span>Missing Total</span>
                                    <strong>5</strong>
                                </div>

                                <div>
                                    <span>Accepted Total</span>
                                    <strong class="text-success">140</strong>
                                </div>

                            </div>

                            <div class="alert alert-warning mt-4"
                                 role="note">
                                الأرقام داخل Accepted والإجماليات
                                أمثلة ثابتة؛ لن تتغير عند تعديل
                                الحقول. في النسخة الفعلية
                                يجب التحقق من صحة الكميات
                                قبل تأكيد الاستلام.
                            </div>

                            <div class="d-flex flex-wrap gap-3 mt-3">

                                <button type="button"
                                        class="btn btn-primary">
                                    تأكيد الاستلام (عرض فقط)
                                </button>

                                <button type="reset"
                                        class="btn btn-outline-secondary">
                                    إعادة تعيين الحقول
                                </button>

                            </div>

                        </form>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع بيانات الشحنات والكميات تجريبية.
                        لا توجد عمليات حفظ أو تحديث مخزون فعلية.
                    </p>

                </div>

            </main>

        </div>
    </div>

</body>
</html>
