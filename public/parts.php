
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>إدارة قطع الغيار | STOCKMIND</title>

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
                            <a href="parts.php"
                               class="sidebar-link active"
                               aria-current="page">
                                <span aria-hidden="true">▣</span>
                                قطع الغيار
                            </a>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">↔</span>
                                حركات المخزون
                            </span>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">♧</span>
                                الموردون
                            </span>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">▧</span>
                                طلبات الشراء
                            </span>
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
                            إدارة قطع الغيار
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            إدارة أصناف قطع الغيار ومتابعة المخزون
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

                    <!-- ===================================
                         PAGE INTRODUCTION
                    ==================================== -->
                    <section class="dashboard-welcome mb-4">

                        <h2>مخزون قطع غيار السيارات</h2>

                        <p class="mb-0">
                            تابع الأصناف وأرقام القطع والعلامات التجارية
                            وكميات المخزون في مستودعات شركتك.
                        </p>

                    </section>

                    <!-- ===================================
                         INVENTORY STATISTICS
                    ==================================== -->
                    <section class="mb-4"
                             aria-labelledby="partsStatsTitle">

                        <h2 id="partsStatsTitle"
                            class="content-heading">
                            ملخص المخزون
                        </h2>

                        <div class="row g-3">

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon"
                                         aria-hidden="true">📦</div>

                                    <p>إجمالي الأصناف</p>
                                    <h3>2,450</h3>
                                    <small>صنف مسجل</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon"
                                         aria-hidden="true">✓</div>

                                    <p>أصناف متوفرة</p>
                                    <h3>2,390</h3>
                                    <small>كميات متاحة</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon"
                                         aria-hidden="true">⚠</div>

                                    <p>مخزون منخفض</p>
                                    <h3>42</h3>
                                    <small>تحتاج إلى إعادة الطلب</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon purple-icon"
                                         aria-hidden="true">🚫</div>

                                    <p>نفد المخزون</p>
                                    <h3>18</h3>
                                    <small>أصناف غير متوفرة</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- ===================================
                         PARTS INVENTORY TABLE
                    ==================================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="partsTableTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="partsTableTitle">
                                    قائمة قطع الغيار
                                </h2>

                                <p>
                                    عرض تجريبي لبيانات الأصناف المسجلة
                                </p>
                            </div>

                            <a href="#add-part"
                               class="btn btn-primary btn-sm">
                                + إضافة قطعة غيار
                            </a>

                        </div>

                        <!-- Filter UI -->
                        <div class="row g-3 mb-4">

                            <div class="col-12 col-md-6">

                                <label for="partSearch"
                                       class="form-label">
                                    البحث عن قطعة
                                </label>

                                <input
                                    type="search"
                                    id="partSearch"
                                    class="form-control"
                                    placeholder="SKU أو Part Number أو اسم القطعة"
                                >

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="statusFilter"
                                       class="form-label">
                                    حالة المخزون
                                </label>

                                <select id="statusFilter"
                                        class="form-select">

                                    <option>جميع الحالات</option>
                                    <option>متوفر</option>
                                    <option>مخزون منخفض</option>
                                    <option>نفد المخزون</option>

                                </select>

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="warehouseFilter"
                                       class="form-label">
                                    المستودع
                                </label>

                                <select id="warehouseFilter"
                                        class="form-select">

                                    <option>جميع المستودعات</option>
                                    <option>المستودع الرئيسي</option>
                                    <option>مستودع عمّان</option>
                                    <option>مستودع الزرقاء</option>

                                </select>

                            </div>

                        </div>

                        <!-- Responsive Table -->
                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">SKU</th>
                                        <th scope="col">اسم القطعة</th>
                                        <th scope="col">Part Number</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">المنشأ</th>
                                        <th scope="col">الكمية</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td><strong>SM-1001</strong></td>
                                        <td>Brake Pads</td>
                                        <td>04465-0K240</td>
                                        <td>Toyota</td>
                                        <td>Japan</td>
                                        <td>120</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                متوفر
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1002</strong></td>
                                        <td>Oil Filter</td>
                                        <td>26300-35505</td>
                                        <td>Hyundai</td>
                                        <td>Korea</td>
                                        <td>8</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                مخزون منخفض
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1003</strong></td>
                                        <td>Air Filter</td>
                                        <td>17801-0L040</td>
                                        <td>Toyota</td>
                                        <td>Thailand</td>
                                        <td>65</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                متوفر
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1004</strong></td>
                                        <td>Spark Plug</td>
                                        <td>18855-10060</td>
                                        <td>Hyundai</td>
                                        <td>Korea</td>
                                        <td>0</td>
                                        <td>
                                            <span class="badge text-bg-danger">
                                                نفد المخزون
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1005</strong></td>
                                        <td>Brake Pads - Aftermarket</td>
                                        <td>04465-0K240</td>
                                        <td>Aftermarket</td>
                                        <td>China</td>
                                        <td>46</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                متوفر
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <p class="inventory-helper-text mt-3 mb-0">
                            الكمية المعروضة هي إجمالي الكمية المتوفرة
                            للصنف عبر المستودعات، وليست كمية رف محدد.
                        </p>

                        <p class="inventory-helper-text mt-2 mb-0">
                            البحث والفلاتر عناصر واجهة فقط،
                            وسيتم تفعيلها لاحقًا.
                        </p>

                    </section>

                    <!-- ===================================
                         ADD PART FORM
                    ==================================== -->
                    <section id="add-part"
                             class="dashboard-panel"
                             aria-labelledby="addPartTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="addPartTitle">
                                    إضافة قطعة غيار جديدة
                                </h2>

                                <p>
                                    أدخل بيانات تعريف الصنف
                                    قبل ربطه بالمخزون والمستودعات
                                </p>
                            </div>

                        </div>

                        <form>

                            <div class="row g-3">

                                <!-- Internal SKU -->
                                <div class="col-12 col-md-6">

                                    <label for="partSku"
                                           class="form-label">
                                        Internal SKU
                                    </label>

                                    <input
                                        type="text"
                                        id="partSku"
                                        name="sku"
                                        class="form-control"
                                        placeholder="SM-1006"
                                    >

                                    <div class="form-text">
                                        سيتم إنشاؤه تلقائيًا لاحقًا،
                                        ويمكن تعديله عند الحاجة.
                                    </div>

                                </div>

                                <!-- Original Part Number -->
                                <div class="col-12 col-md-6">

                                    <label for="originalPartNumber"
                                           class="form-label">
                                        Original Part Number
                                    </label>

                                    <input
                                        type="text"
                                        id="originalPartNumber"
                                        name="original_part_number"
                                        class="form-control"
                                        placeholder="مثال: 04465-0K240"
                                    >

                                </div>

                                <!-- Part Name -->
                                <div class="col-12 col-md-6">

                                    <label for="partName"
                                           class="form-label">
                                        اسم القطعة
                                    </label>

                                    <input
                                        type="text"
                                        id="partName"
                                        name="part_name"
                                        class="form-control"
                                        placeholder="مثال: Brake Pads"
                                        required
                                    >

                                </div>

                                <!-- Brand -->
                                <div class="col-12 col-md-6">

                                    <label for="partBrand"
                                           class="form-label">
                                        العلامة التجارية (Brand)
                                    </label>

                                    <input
                                        type="text"
                                        id="partBrand"
                                        name="brand"
                                        class="form-control"
                                        placeholder="مثال: Toyota"
                                        required
                                    >

                                </div>

                                <!-- Country of Origin -->
                                <div class="col-12 col-md-6">

                                    <label for="partOrigin"
                                           class="form-label">
                                        بلد المنشأ
                                    </label>

                                    <select
                                        id="partOrigin"
                                        name="country_of_origin"
                                        class="form-select"
                                    >
                                        <option value="" selected>
                                            اختر بلد المنشأ
                                        </option>
                                        <option value="Japan">اليابان</option>
                                        <option value="Korea">كوريا</option>
                                        <option value="China">الصين</option>
                                        <option value="Thailand">تايلاند</option>
                                        <option value="Other">أخرى</option>
                                    </select>

                                </div>

                                <!-- Category -->
                                <div class="col-12 col-md-6">

                                    <label for="partCategory"
                                           class="form-label">
                                        التصنيف
                                    </label>

                                    <select
                                        id="partCategory"
                                        name="category"
                                        class="form-select"
                                    >
                                        <option value="" selected>
                                            اختر التصنيف
                                        </option>
                                        <option value="Brakes">
                                            نظام الفرامل
                                        </option>
                                        <option value="Engine">
                                            المحرك
                                        </option>
                                        <option value="Filters">
                                            الفلاتر
                                        </option>
                                        <option value="Electrical">
                                            النظام الكهربائي
                                        </option>
                                        <option value="Suspension">
                                            نظام التعليق
                                        </option>
                                    </select>

                                </div>

                                <!-- Minimum Stock -->
                                <div class="col-12 col-md-6">

                                    <label for="minimumStock"
                                           class="form-label">
                                        الحد الأدنى للمخزون
                                    </label>

                                    <input
                                        type="number"
                                        id="minimumStock"
                                        name="minimum_stock"
                                        class="form-control"
                                        min="0"
                                        placeholder="مثال: 10"
                                    >

                                </div>

                                <!-- Unit -->
                                <div class="col-12 col-md-6">

                                    <label for="partUnit"
                                           class="form-label">
                                        وحدة القياس
                                    </label>

                                    <select
                                        id="partUnit"
                                        name="unit"
                                        class="form-select"
                                    >
                                        <option value="piece">قطعة</option>
                                        <option value="set">طقم</option>
                                        <option value="box">صندوق</option>
                                    </select>

                                </div>

                                <!-- Description -->
                                <div class="col-12">

                                    <label for="partDescription"
                                           class="form-label">
                                        وصف القطعة
                                    </label>

                                    <textarea
                                        id="partDescription"
                                        name="description"
                                        class="form-control"
                                        rows="3"
                                        placeholder="معلومات إضافية عن قطعة الغيار"
                                    ></textarea>

                                </div>

                            </div>

                            <div class="alert alert-info mt-4 mb-3"
                                 role="note">
                                إضافة بيانات القطعة لا تزيد المخزون
                                تلقائيًا. سيتم تسجيل الكميات لاحقًا
                                من خلال عمليات استلام المخزون
                                وتحديد المستودع والرف.
                            </div>

                            <button
                                type="button"
                                class="btn btn-primary"
                            >
                                حفظ القطعة (عرض فقط)
                            </button>

                        </form>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع بيانات الأصناف والإحصائيات
                        تجريبية لأغراض تصميم الواجهة.
                        لا توجد عمليات حفظ أو بحث فعلية بعد.
                    </p>

                </div>

            </main>

        </div>
    </div>

</body>
</html>
