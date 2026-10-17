
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>طلبات الشراء | STOCKMIND</title>

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

            <!-- ===================================
                 SIDEBAR
            ==================================== -->
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
                               class="sidebar-link active"
                               aria-current="page">
                                <span aria-hidden="true">▧</span>
                                طلبات الشراء
                            </a>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">↧</span>
                                الشحنات
                            </span>
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

            <!-- ===================================
                 MAIN CONTENT
            ==================================== -->
            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            إدارة طلبات الشراء
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            تنظيم طلبات شراء قطع الغيار ومتابعة الموردين
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

                <!-- Page Content -->
                <div class="dashboard-content">

                    <!-- ===================================
                         WELCOME
                    ==================================== -->
                    <section class="dashboard-welcome mb-4">

                        <h2>طلبات شراء قطع الغيار</h2>

                        <p class="mb-0">
                            أنشئ طلبات الشراء من الموردين،
                            وتابع حالتها والكميات المطلوبة
                            قبل استلام الشحنات.
                        </p>

                    </section>

                    <!-- ===================================
                         KPI CARDS
                    ==================================== -->
                    <section class="mb-4"
                             aria-labelledby="ordersStatsTitle">

                        <h2 id="ordersStatsTitle"
                            class="content-heading">
                            ملخص طلبات الشراء
                        </h2>

                        <div class="row g-3">

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon"
                                         aria-hidden="true">🧾</div>

                                    <p>إجمالي الطلبات</p>
                                    <h3>32</h3>
                                    <small>طلبات شراء مسجلة</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon"
                                         aria-hidden="true">⌛</div>

                                    <p>بانتظار الموافقة</p>
                                    <h3>8</h3>
                                    <small>طلبات قيد المراجعة</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon purple-icon"
                                         aria-hidden="true">🚚</div>

                                    <p>قيد التوريد</p>
                                    <h3>12</h3>
                                    <small>طلبات مع الموردين</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon"
                                         aria-hidden="true">✓</div>

                                    <p>مكتملة</p>
                                    <h3>12</h3>
                                    <small>طلبات أُغلق استلامها</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- ===================================
                         PURCHASE ORDERS TABLE
                    ==================================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="ordersTableTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="ordersTableTitle">
                                    قائمة طلبات الشراء
                                </h2>

                                <p>
                                    متابعة المورد والتاريخ والقيمة والحالة
                                </p>
                            </div>

                            <a href="#create-order"
                               class="btn btn-primary btn-sm">
                                + طلب شراء جديد
                            </a>

                        </div>

                        <!-- Filters - UI Only -->
                        <div class="row g-3 mb-4">

                            <div class="col-12 col-md-6">

                                <label for="orderSearch"
                                       class="form-label">
                                    البحث عن طلب
                                </label>

                                <input
                                    type="search"
                                    id="orderSearch"
                                    class="form-control"
                                    placeholder="رقم الطلب أو اسم المورد"
                                >

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="orderStatusFilter"
                                       class="form-label">
                                    حالة الطلب
                                </label>

                                <select id="orderStatusFilter"
                                        class="form-select">

                                    <option value="">
                                        جميع الحالات
                                    </option>
                                    <option>بانتظار الموافقة</option>
                                    <option>قيد التوريد</option>
                                    <option>مكتمل</option>
                                    <option>ملغى</option>

                                </select>

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="orderSupplierFilter"
                                       class="form-label">
                                    المورد
                                </label>

                                <select id="orderSupplierFilter"
                                        class="form-select">

                                    <option value="">
                                        جميع الموردين
                                    </option>
                                    <option>Korea Auto Parts</option>
                                    <option>China Parts Trading</option>
                                    <option>Amman Auto Supplies</option>

                                </select>

                            </div>

                        </div>

                        <!-- Table -->
                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">رقم الطلب</th>
                                        <th scope="col">المورد</th>
                                        <th scope="col">تاريخ الطلب</th>
                                        <th scope="col">التسليم المتوقع</th>
                                        <th scope="col">عدد البنود</th>
                                        <th scope="col">القيمة</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td><strong>PO-1001</strong></td>
                                        <td>Korea Auto Parts</td>
                                        <td>2026-10-05</td>
                                        <td>2026-10-25</td>
                                        <td>3</td>
                                        <td>1,850 USD</td>
                                        <td>
                                            <span class="badge text-bg-primary">
                                                قيد التوريد
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>PO-1002</strong></td>
                                        <td>China Parts Trading</td>
                                        <td>2026-10-08</td>
                                        <td>2026-11-02</td>
                                        <td>5</td>
                                        <td>3,400 USD</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                بانتظار الموافقة
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>PO-1003</strong></td>
                                        <td>Amman Auto Supplies</td>
                                        <td>2026-09-20</td>
                                        <td>2026-09-28</td>
                                        <td>2</td>
                                        <td>420 JOD</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                مكتمل
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>PO-1004</strong></td>
                                        <td>Gulf Spare Parts</td>
                                        <td>2026-10-10</td>
                                        <td>2026-10-30</td>
                                        <td>4</td>
                                        <td>980 USD</td>
                                        <td>
                                            <span class="badge text-bg-primary">
                                                قيد التوريد
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>PO-1005</strong></td>
                                        <td>Emirates Parts Distribution</td>
                                        <td>2026-10-12</td>
                                        <td>—</td>
                                        <td>1</td>
                                        <td>250 AED</td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                ملغى
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <p class="inventory-helper-text mt-3 mb-0">
                            القيم بعملاتها الأصلية، ولا يتم
                            جمع مبالغ العملات المختلفة مباشرة.
                            جميع الطلبات المعروضة تجريبية.
                        </p>

                    </section>

                    <!-- ===================================
                         CREATE PURCHASE ORDER
                    ==================================== -->
                    <section id="create-order"
                             class="dashboard-panel"
                             aria-labelledby="createOrderTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="createOrderTitle">
                                    إنشاء طلب شراء جديد
                                </h2>

                                <p>
                                    بيانات الطلب والمورد وبنود قطع الغيار
                                </p>
                            </div>

                        </div>

                        <form>

                            <!-- Order Information -->
                            <h3 class="purchase-form-heading">
                                معلومات الطلب
                            </h3>

                            <div class="row g-3">

                                <!-- Order Number -->
                                <div class="col-12 col-md-6">

                                    <label for="purchaseOrderNumber"
                                           class="form-label">
                                        رقم طلب الشراء
                                    </label>

                                    <input
                                        type="text"
                                        id="purchaseOrderNumber"
                                        name="order_number"
                                        class="form-control"
                                        placeholder="سيُنشأ تلقائيًا لاحقًا"
                                        readonly
                                    >

                                </div>

                                <!-- Supplier -->
                                <div class="col-12 col-md-6">

                                    <label for="purchaseSupplier"
                                           class="form-label">
                                        المورد
                                    </label>

                                    <select
                                        id="purchaseSupplier"
                                        name="supplier_id"
                                        class="form-select"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            اختر المورد
                                        </option>

                                        <option value="1">
                                            Korea Auto Parts
                                        </option>

                                        <option value="2">
                                            China Parts Trading
                                        </option>

                                        <option value="4">
                                            Amman Auto Supplies
                                        </option>

                                        <option value="5">
                                            Emirates Parts Distribution
                                        </option>
                                    </select>

                                </div>

                                <!-- Order Date -->
                                <div class="col-12 col-md-6">

                                    <label for="purchaseDate"
                                           class="form-label">
                                        تاريخ الطلب
                                    </label>

                                    <input
                                        type="date"
                                        id="purchaseDate"
                                        name="order_date"
                                        class="form-control"
                                        required
                                    >

                                </div>

                                <!-- Expected Delivery -->
                                <div class="col-12 col-md-6">

                                    <label for="expectedDelivery"
                                           class="form-label">
                                        تاريخ التسليم المتوقع
                                    </label>

                                    <input
                                        type="date"
                                        id="expectedDelivery"
                                        name="expected_delivery"
                                        class="form-control"
                                    >

                                </div>

                                <!-- Currency -->
                                <div class="col-12 col-md-6">

                                    <label for="orderCurrency"
                                           class="form-label">
                                        العملة
                                    </label>

                                    <select
                                        id="orderCurrency"
                                        name="currency"
                                        class="form-select"
                                    >
                                        <option value="USD">USD</option>
                                        <option value="JOD">JOD</option>
                                        <option value="AED">AED</option>
                                    </select>

                                </div>

                                <!-- Initial Status -->
                                <div class="col-12 col-md-6">

                                    <label for="purchaseStatus"
                                           class="form-label">
                                        حالة الطلب الأولية
                                    </label>

                                    <input
                                        type="text"
                                        id="purchaseStatus"
                                        class="form-control"
                                        value="مسودة"
                                        readonly
                                    >

                                </div>

                            </div>

                            <!-- Order Items -->
                            <h3 class="purchase-form-heading mt-4">
                                بنود طلب الشراء
                            </h3>

                            <p class="inventory-helper-text">
                                كل بند يمثل قطعة غيار وكمية مطلوبة
                                وسعر وحدة. سنعرض بندين ثابتين
                                لتوضيح شكل الطلب متعدد الأصناف.
                            </p>

                            <div class="purchase-item-row">

                                <h4 class="purchase-item-title">
                                    البند الأول
                                </h4>

                                <div class="row g-3">

                                    <div class="col-12 col-lg-5">
                                        <label for="orderPart1"
                                               class="form-label">
                                            قطعة الغيار
                                        </label>

                                        <select id="orderPart1"
                                                name="part_1"
                                                class="form-select"
                                                required>
                                            <option value="" selected disabled>
                                                اختر القطعة
                                            </option>
                                            <option value="1001">
                                                SM-1001 — Brake Pads
                                            </option>
                                            <option value="1002">
                                                SM-1002 — Oil Filter
                                            </option>
                                            <option value="1003">
                                                SM-1003 — Air Filter
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <label for="orderQty1"
                                               class="form-label">
                                            الكمية
                                        </label>

                                        <input type="number"
                                               id="orderQty1"
                                               name="quantity_1"
                                               class="form-control"
                                               min="1"
                                               step="1"
                                               placeholder="100"
                                               required>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label for="orderPrice1"
                                               class="form-label">
                                            سعر الوحدة
                                        </label>

                                        <input type="number"
                                               id="orderPrice1"
                                               name="unit_price_1"
                                               class="form-control"
                                               min="0"
                                               step="0.01"
                                               placeholder="12.50"
                                               required>
                                    </div>

                                </div>
                            </div>

                            <div class="purchase-item-row mt-3">

                                <h4 class="purchase-item-title">
                                    البند الثاني (اختياري)
                                </h4>

                                <div class="row g-3">

                                    <div class="col-12 col-lg-5">
                                        <label for="orderPart2"
                                               class="form-label">
                                            قطعة الغيار
                                        </label>

                                        <select id="orderPart2"
                                                name="part_2"
                                                class="form-select">
                                            <option value="" selected>
                                                بدون بند إضافي
                                            </option>
                                            <option value="1001">
                                                SM-1001 — Brake Pads
                                            </option>
                                            <option value="1002">
                                                SM-1002 — Oil Filter
                                            </option>
                                            <option value="1003">
                                                SM-1003 — Air Filter
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <label for="orderQty2"
                                               class="form-label">
                                            الكمية
                                        </label>

                                        <input type="number"
                                               id="orderQty2"
                                               name="quantity_2"
                                               class="form-control"
                                               min="1"
                                               step="1"
                                               placeholder="50">
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label for="orderPrice2"
                                               class="form-label">
                                            سعر الوحدة
                                        </label>

                                        <input type="number"
                                               id="orderPrice2"
                                               name="unit_price_2"
                                               class="form-control"
                                               min="0"
                                               step="0.01"
                                               placeholder="8.00">
                                    </div>

                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="mt-4">

                                <label for="purchaseNotes"
                                       class="form-label">
                                    ملاحظات الطلب
                                </label>

                                <textarea
                                    id="purchaseNotes"
                                    name="notes"
                                    class="form-control"
                                    rows="3"
                                    placeholder="شروط التوريد أو تعليمات المورد"
                                ></textarea>

                            </div>

                            <div class="alert alert-info mt-4"
                                 role="note">
                                هذه واجهة عرض فقط. لا يتم حساب
                                الإجمالي تلقائيًا ولا حفظ الطلب.
                                إنشاء Purchase Order لا يزيد
                                كمية المخزون.
                            </div>

                            <button type="button"
                                    class="btn btn-primary">
                                إنشاء الطلب (عرض فقط)
                            </button>

                        </form>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع البيانات تجريبية.
                        لا توجد عمليات إنشاء أو موافقة
                        أو شراء فعلية في هذه المرحلة.
                    </p>

                </div>

            </main>

        </div>
    </div>

</body>
</html>
