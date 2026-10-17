
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>إدارة الموردين | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <!-- Global and Dashboard CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="dashboard-page">

    <div class="container-fluid">
        <div class="row">

            <!-- =====================================
                 SIDEBAR
            ====================================== -->
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
                            <a href="suppliers.php"
                               class="sidebar-link active"
                               aria-current="page">
                                <span aria-hidden="true">♧</span>
                                الموردون
                            </a>
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

            <!-- =====================================
                 MAIN CONTENT
            ====================================== -->
            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            إدارة الموردين
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            متابعة الموردين وبيانات التواصل والتوريد
                        </p>
                    </div>

                    <div class="dashboard-user">

                        <span class="demo-label">
                            Demo Mode
                        </span>

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

                    <!-- =====================================
                         WELCOME SECTION
                    ====================================== -->
                    <section class="dashboard-welcome mb-4">

                        <h2>الموردون وشركاء التوريد</h2>

                        <p class="mb-0">
                            نظّم معلومات الموردين المحليين والدوليين،
                            واحتفظ ببيانات التواصل والتوريد
                            في مكان واحد.
                        </p>

                    </section>

                    <!-- =====================================
                         SUPPLIER STATISTICS
                    ====================================== -->
                    <section class="mb-4"
                             aria-labelledby="supplierStatsTitle">

                        <h2 id="supplierStatsTitle"
                            class="content-heading">
                            ملخص الموردين
                        </h2>

                        <div class="row g-3">

                            <!-- Total Suppliers -->
                            <div class="col-12 col-sm-6 col-xl-3">

                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon"
                                         aria-hidden="true">
                                        🤝
                                    </div>

                                    <p>إجمالي الموردين</p>

                                    <h3>24</h3>

                                    <small>مورد مسجل</small>

                                </div>
                            </div>

                            <!-- Active Suppliers -->
                            <div class="col-12 col-sm-6 col-xl-3">

                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon"
                                         aria-hidden="true">
                                        ✓
                                    </div>

                                    <p>موردون نشطون</p>

                                    <h3>19</h3>

                                    <small>متاحون للتعامل</small>

                                </div>
                            </div>

                            <!-- Inactive Suppliers -->
                            <div class="col-12 col-sm-6 col-xl-3">

                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon"
                                         aria-hidden="true">
                                        ⚠
                                    </div>

                                    <p>موردون غير نشطين</p>

                                    <h3>5</h3>

                                    <small>متوقفون مؤقتًا</small>

                                </div>
                            </div>

                            <!-- Supply Countries -->
                            <div class="col-12 col-sm-6 col-xl-3">

                                <div class="dashboard-stat-card">

                                    <div class="stat-icon purple-icon"
                                         aria-hidden="true">
                                        🌍
                                    </div>

                                    <p>دول التوريد</p>

                                    <h3>5</h3>

                                    <small>أسواق توريد مختلفة</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- =====================================
                         SUPPLIERS TABLE
                    ====================================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="suppliersTableTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="suppliersTableTitle">
                                    قائمة الموردين
                                </h2>

                                <p>
                                    عرض بيانات الموردين المسجلين
                                </p>
                            </div>

                            <a href="#add-supplier"
                               class="btn btn-primary btn-sm">
                                + إضافة مورد
                            </a>

                        </div>

                        <!-- Search and Filter UI -->
                        <div class="row g-3 mb-4">

                            <div class="col-12 col-md-6">

                                <label for="supplierSearch"
                                       class="form-label">
                                    البحث عن مورد
                                </label>

                                <input
                                    type="search"
                                    id="supplierSearch"
                                    name="supplier_search"
                                    class="form-control"
                                    placeholder="اسم المورد أو البريد أو الهاتف"
                                >

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="supplierCountryFilter"
                                       class="form-label">
                                    الدولة
                                </label>

                                <select id="supplierCountryFilter"
                                        class="form-select">

                                    <option value="">
                                        جميع الدول
                                    </option>

                                    <option value="KR">كوريا الجنوبية</option>
                                    <option value="CN">الصين</option>
                                    <option value="OM">عُمان</option>
                                    <option value="JO">الأردن</option>
                                    <option value="AE">الإمارات</option>

                                </select>

                            </div>

                            <div class="col-12 col-md-3">

                                <label for="supplierStatusFilter"
                                       class="form-label">
                                    حالة المورد
                                </label>

                                <select id="supplierStatusFilter"
                                        class="form-select">

                                    <option value="">
                                        جميع الحالات
                                    </option>

                                    <option value="active">نشط</option>
                                    <option value="inactive">غير نشط</option>

                                </select>

                            </div>

                        </div>

                        <!-- Responsive Table -->
                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">رقم المورد</th>
                                        <th scope="col">اسم المورد</th>
                                        <th scope="col">الدولة</th>
                                        <th scope="col">جهة الاتصال</th>
                                        <th scope="col">البريد الإلكتروني</th>
                                        <th scope="col">الهاتف</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <!-- Supplier 1 -->
                                    <tr>
                                        <td><strong>SUP-001</strong></td>
                                        <td>Korea Auto Parts</td>
                                        <td>كوريا الجنوبية</td>
                                        <td>Kim Lee</td>
                                        <td>
                                            <a href="mailto:sales@example.com"
                                               class="supplier-contact-link">
                                                sales@example.com
                                            </a>
                                        </td>
                                        <td>+82 2 0000 0000</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Supplier 2 -->
                                    <tr>
                                        <td><strong>SUP-002</strong></td>
                                        <td>China Parts Trading</td>
                                        <td>الصين</td>
                                        <td>Chen Wei</td>
                                        <td>
                                            <a href="mailto:china@example.com"
                                               class="supplier-contact-link">
                                                china@example.com
                                            </a>
                                        </td>
                                        <td>+86 10 0000 0000</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Supplier 3 -->
                                    <tr>
                                        <td><strong>SUP-003</strong></td>
                                        <td>Gulf Spare Parts</td>
                                        <td>عُمان</td>
                                        <td>Ahmed Ali</td>
                                        <td>
                                            <a href="mailto:gulf@example.com"
                                               class="supplier-contact-link">
                                                gulf@example.com
                                            </a>
                                        </td>
                                        <td>+968 0000 0000</td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                غير نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Supplier 4 -->
                                    <tr>
                                        <td><strong>SUP-004</strong></td>
                                        <td>Amman Auto Supplies</td>
                                        <td>الأردن</td>
                                        <td>Omar Hassan</td>
                                        <td>
                                            <a href="mailto:amman@example.com"
                                               class="supplier-contact-link">
                                                amman@example.com
                                            </a>
                                        </td>
                                        <td>+962 6 000 0000</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Supplier 5 -->
                                    <tr>
                                        <td><strong>SUP-005</strong></td>
                                        <td>Emirates Parts Distribution</td>
                                        <td>الإمارات</td>
                                        <td>Sara Ahmed</td>
                                        <td>
                                            <a href="mailto:uae@example.com"
                                               class="supplier-contact-link">
                                                uae@example.com
                                            </a>
                                        </td>
                                        <td>+971 4 000 0000</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <p class="inventory-helper-text mt-3 mb-0">
                            هذه خمسة أمثلة من أصل 24 موردًا افتراضيًا.
                            البحث والفلاتر ليست مفعلة بعد.
                        </p>

                    </section>

                    <!-- =====================================
                         ADD SUPPLIER FORM
                    ====================================== -->
                    <section id="add-supplier"
                             class="dashboard-panel"
                             aria-labelledby="addSupplierTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="addSupplierTitle">
                                    إضافة مورد جديد
                                </h2>

                                <p>
                                    أدخل معلومات المورد ووسائل التواصل
                                </p>
                            </div>

                        </div>

                        <form>

                            <div class="row g-3">

                                <!-- Supplier Name -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierName"
                                           class="form-label">
                                        اسم المورد
                                    </label>

                                    <input
                                        type="text"
                                        id="supplierName"
                                        name="supplier_name"
                                        class="form-control"
                                        placeholder="مثال: Korea Auto Parts"
                                        required
                                    >

                                </div>

                                <!-- Contact Person -->
                                <div class="col-12 col-md-6">

                                    <label for="contactPerson"
                                           class="form-label">
                                        اسم مسؤول التواصل
                                    </label>

                                    <input
                                        type="text"
                                        id="contactPerson"
                                        name="contact_person"
                                        class="form-control"
                                        placeholder="اسم جهة الاتصال"
                                    >

                                </div>

                                <!-- Country -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierCountry"
                                           class="form-label">
                                        الدولة
                                    </label>

                                    <select id="supplierCountry"
                                            name="country"
                                            class="form-select"
                                            required>

                                        <option value="" selected disabled>
                                            اختر الدولة
                                        </option>

                                        <option value="KR">كوريا الجنوبية</option>
                                        <option value="CN">الصين</option>
                                        <option value="OM">عُمان</option>
                                        <option value="JO">الأردن</option>
                                        <option value="AE">الإمارات</option>
                                        <option value="OTHER">أخرى</option>

                                    </select>

                                </div>

                                <!-- City -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierCity"
                                           class="form-label">
                                        المدينة
                                    </label>

                                    <input
                                        type="text"
                                        id="supplierCity"
                                        name="city"
                                        class="form-control"
                                        placeholder="مثال: Seoul"
                                    >

                                </div>

                                <!-- Email -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierEmail"
                                           class="form-label">
                                        البريد الإلكتروني
                                    </label>

                                    <input
                                        type="email"
                                        id="supplierEmail"
                                        name="email"
                                        class="form-control"
                                        placeholder="supplier@example.com"
                                        autocomplete="email"
                                    >

                                </div>

                                <!-- Phone -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierPhone"
                                           class="form-label">
                                        رقم الهاتف
                                    </label>

                                    <input
                                        type="tel"
                                        id="supplierPhone"
                                        name="phone"
                                        class="form-control"
                                        placeholder="+82 ..."
                                        autocomplete="tel"
                                    >

                                </div>

                                <!-- Supplier Status -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierStatus"
                                           class="form-label">
                                        حالة المورد
                                    </label>

                                    <select id="supplierStatus"
                                            name="status"
                                            class="form-select">

                                        <option value="active">
                                            نشط
                                        </option>

                                        <option value="inactive">
                                            غير نشط
                                        </option>

                                    </select>

                                </div>

                                <!-- Website -->
                                <div class="col-12 col-md-6">

                                    <label for="supplierWebsite"
                                           class="form-label">
                                        الموقع الإلكتروني
                                    </label>

                                    <input
                                        type="url"
                                        id="supplierWebsite"
                                        name="website"
                                        class="form-control"
                                        placeholder="https://example.com"
                                    >

                                </div>

                                <!-- Address -->
                                <div class="col-12">

                                    <label for="supplierAddress"
                                           class="form-label">
                                        عنوان المورد
                                    </label>

                                    <input
                                        type="text"
                                        id="supplierAddress"
                                        name="address"
                                        class="form-control"
                                        placeholder="الشارع، المنطقة، العنوان الكامل"
                                    >

                                </div>

                                <!-- Notes -->
                                <div class="col-12">

                                    <label for="supplierNotes"
                                           class="form-label">
                                        ملاحظات
                                    </label>

                                    <textarea
                                        id="supplierNotes"
                                        name="notes"
                                        class="form-control"
                                        rows="3"
                                        placeholder="معلومات إضافية عن المورد"
                                    ></textarea>

                                </div>

                            </div>

                            <div class="alert alert-info mt-4"
                                 role="note">
                                إضافة المورد لا تعني إضافة قطع غيار
                                أو زيادة المخزون. سيتم ربط الموردين
                                بالأصناف وطلبات الشراء لاحقًا
                                من خلال PHP وMySQL.
                            </div>

                            <button type="button"
                                    class="btn btn-primary">
                                حفظ المورد (عرض فقط)
                            </button>

                        </form>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع أسماء الموردين وأرقام التواصل
                        والإحصائيات بيانات تجريبية.
                        لا توجد عمليات حفظ أو تعديل فعلية.
                    </p>

                </div>

            </main>

        </div>
    </div>

</body>
</html>
