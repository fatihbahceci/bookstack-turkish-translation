<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Son Oluşturulan',
    'recently_created_pages' => 'Son Oluşturulan Sayfalar',
    'recently_updated_pages' => 'Son Güncellenen Sayfalar',
    'recently_created_chapters' => 'Son Oluşturulan Bölümler',
    'recently_created_books' => 'Son Oluşturulan Kitaplar',
    'recently_created_shelves' => 'Son Oluşturulan Raflar',
    'recently_update' => 'Son Güncellenen',
    'recently_viewed' => 'Son Görülenler',
    'recent_activity' => 'Son Aktiviteler',
    'create_now' => 'Şimdi bir tane oluştur',
    'revisions' => 'Güncellemeler',
    'meta_revision' => 'Güncelleme #:revisionCount',
    'meta_created' => 'Oluşturuldu :timeLength',
    'meta_created_name' => ':timeLength :user tarafından oluşturuldu',
    'meta_updated' => 'Güncellendi :timeLength',
    'meta_updated_name' => ':timeLength :user tarfından Güncellendi',
    'entity_select' => 'Eleman Seç',
    'images' => 'Resimler',
    'my_recent_drafts' => 'Son karalamalarım',
    'my_recently_viewed' => 'Son Görülenlerim',
    'no_pages_viewed' => 'Hiç sayfa görntülememişsiniz',
    'no_pages_recently_created' => 'Yakın zamanda hiç sayfa oluşturulmamış',
    'no_pages_recently_updated' => 'Yakın zamanda hiç sayfa günecellenmemiş ',
    'export' => 'Dışarı ver',
    'export_html' => 'HTML (içeriğiyle)',
    'export_pdf' => 'PDF Dosyası',
    'export_text' => 'Salt metin',

    // Permissions and restrictions
    'permissions' => 'Erişimler',
    'permissions_intro' => 'Etkinleştirildiğinde, bu izinler belirlenen rol izinlerinden daha öncelikli olur.',
    'permissions_enable' => 'Özelleştirilmiş İzinleri Etkinleştir',
    'permissions_save' => 'İzinleri Kaydet',

    // Search
    'search_results' => 'Arama Sonuçları',
    'search_total_results_found' => ':count sonuç bulundu|toplam :count sonuç bulundu',
    'search_clear' => 'Aramayı Temizle',
    'search_no_pages' => 'Bu aramayla ilgili sayfa eşleştirilemedi',
    'search_for_term' => ':term için ara',
    'search_more' => 'Daha Fazla Sonuç',
    'search_filters' => 'Arama Filtreleri',
    'search_content_type' => 'İçerik Türü',
    'search_exact_matches' => 'Tam Olarak Uyan',
    'search_tags' => 'Etiket Aramaları',
    'search_options' => 'Ayarlar',
    'search_viewed_by_me' => 'Benim tarafımdan görülen',
    'search_not_viewed_by_me' => 'Benim tarafımdan görülmeyen',
    'search_permissions_set' => 'Erişim ayarlanmış olan',
    'search_created_by_me' => 'Benim taradımdan oluşturulan',
    'search_updated_by_me' => 'Benim tarafımdan güncellenmiş',
    'search_date_options' => 'Tarih Ayarları',
    'search_updated_before' => 'Şu tarihten önce güncellenmiş',
    'search_updated_after' => 'Şu tarihten sonra güncellenmiş',
    'search_created_before' => 'Şu tarihten önce oluşturulmuş',
    'search_created_after' => 'Şu tarihten sonra oluşturulmuş',
    'search_set_date' => 'Tarihi Ayarla',
    'search_update' => 'Aramayı Güncelle',

    // Shelves
    'shelf' => 'Raf',
    'shelves' => 'Raflar',
    'x_shelves' => ':count Raf|:count Raflar',
    'shelves_long' => 'Kitaplıklar',
    'shelves_empty' => 'Hiç raf oluşturulmamış',
    'shelves_create' => 'Yeni Raf Oluştur',
    'shelves_popular' => 'Popüler Raflar',
    'shelves_new' => 'Yeni Raflar',
    'shelves_new_action' => 'Yeni Raf',
    'shelves_popular_empty' => 'Popüler raflar burada görünecek.',
    'shelves_new_empty' => 'En yeni raflar burada görünecek.',
    'shelves_save' => 'Rafı Kaydet',
    'shelves_books' => 'Bu raftaki kitaplar',
    'shelves_add_books' => 'Bu rafa kitaplar ekle',
    'shelves_drag_books' => 'Bu rafa kitap eklemek için kitapları buraya sürükleyin',
    'shelves_empty_contents' => 'Bu rafta kendisine atanmış kitap yok',
    'shelves_edit_and_assign' => 'Kitap atamak için rafı düzenle',
    'shelves_edit_named' => ':name Rafını Düzenle',
    'shelves_edit' => 'Rafı Düzenle',
    'shelves_delete' => 'Rafı Sil',
    'shelves_delete_named' => ':name Rafını Sil',
    'shelves_delete_explain' => "Bu işlem ':name' adlı rafı silecek. İçerdiği kitaplar silinmeyecektir.",
    'shelves_delete_confirmation' => 'Bu rafı silmek istediğinize emin misiniz?',
    'shelves_permissions' => 'Raf İzinleri',
    'shelves_permissions_updated' => 'Raf İzinleri Güncellendi',
    'shelves_permissions_active' => 'Raf İzinleri Aktif',
    'shelves_copy_permissions_to_books' => 'İzinleri Kitaplara Kopyala',
    'shelves_copy_permissions' => 'Erişimleri Kopyala',
    'shelves_copy_permissions_explain' => 'Bu işlem, bu kitaplığın geçerli izin ayarlarını içinde bulunan tüm kitaplara uygulayacaktır. Etkinleştirmeden önce, bu kitaplığın izinlerinde yapılan değişikliklerin kaydedildiğinden emin olun.',
    'shelves_copy_permission_success' => 'Raf İzinleri :count kitaba kopyalandı',

    // Books
    'book' => 'Kitap',
    'books' => 'Kitaplar',
    'x_books' => ':count Kitap|:count Kitaplar',
    'books_empty' => 'Hiç kitap oluşturulmadı',
    'books_popular' => 'Popüler Kitaplar',
    'books_recent' => 'Yakın Zamandaki Kitaplar',
    'books_new' => 'Yeni Kitaplar',
    'books_new_action' => 'Yeni Kitap',
    'books_popular_empty' => 'Popüler kitaplar burada listelenecek.',
    'books_new_empty' => 'Yakın zamanda oluşturlan kitaplar burad listelenecek.',
    'books_create' => 'Yeni Kitap Oluştur',
    'books_delete' => 'Kitap Sil',
    'books_delete_named' => 'Kitap Sil :bookName',
    'books_delete_explain' => '\':bookName\' isimli kitap silinecek. Tüm bölüm ve sayfalar kaldırılacak.',
    'books_delete_confirmation' => 'Bu kitabı silmek istediğinize emin misiniz?',
    'books_edit' => 'Kitabı Düzenle',
    'books_edit_named' => 'Kitap Düzenle :bookName',
    'books_form_book_name' => 'Kitap Adı',
    'books_save' => 'Kitabı Kaydet',
    'books_permissions' => 'Kitap İzinleri',
    'books_permissions_updated' => 'Kitap İzinleri Güncellendi',
    'books_empty_contents' => 'Bu kitap için sayfa veya bölüm oluşturulmamıştır.',
    'books_empty_create_page' => 'Yeni sayfa oluştur',
    'books_empty_sort_current_book' => 'Geçerli kitabı yeniden sırala',
    'books_empty_add_chapter' => 'Bölüm ekle',
    'books_permissions_active' => 'Kitap İzinleri Aktif',
    'books_search_this' => 'Bu kitabı ara',
    'books_navigation' => 'Kitap Navigasyonu',
    'books_sort' => 'Kitap İçeriğini Sırala',
    'books_sort_named' => 'Kitap Sırala :bookName',
    'books_sort_name' => 'Ada Göre Sırala',
    'books_sort_created' => 'Oluşturulma Tarihine Göre Sırala',
    'books_sort_updated' => 'Güncelleme Tarihine Göre Sırala',
    'books_sort_chapters_first' => 'İlk Bölümler',
    'books_sort_chapters_last' => 'Son Bölümler',
    'books_sort_show_other' => 'Diğer Kitapları Göster',
    'books_sort_save' => 'Yeni Sıralama Kaydet',

    // Chapters
    'chapter' => 'Bölüm',
    'chapters' => 'Bölümler',
    'x_chapters' => ':count Bölüm|:count Bölümler',
    'chapters_popular' => 'Popüler Bölümler',
    'chapters_new' => 'Yeni Bölüm',
    'chapters_create' => 'Yeni Bölüm Oluştur',
    'chapters_delete' => 'Bölüm Sil',
    'chapters_delete_named' => 'Bölümü Sil :chapterName',
    'chapters_delete_explain' => 'Bu işlem \':chapterName\' isimli bölümü silecek. Tüm sayfalar kaldırılacak ve doğrudan üst kitaba eklenecektir.',
    'chapters_delete_confirm' => 'Bu bölümü silmek istediğinize emin misiniz?',
    'chapters_edit' => 'Bölümü Düzenle',
    'chapters_edit_named' => 'Bölümü Düzenle :chapterName',
    'chapters_save' => 'Bölümü Kaydet',
    'chapters_move' => 'Bölümü Taşı',
    'chapters_move_named' => 'Bölümü Taşı :chapterName',
    'chapter_move_success' => 'Bölüm şuraya taşındı :bookName',
    'chapters_permissions' => 'Bölüm İzinleri',
    'chapters_empty' => 'Bu bölümde şu anda hiç sayfa yok.',
    'chapters_permissions_active' => 'Bölüm İzinleri Aktif',
    'chapters_permissions_success' => 'Bölüm İzinleri Güncellendi',
    'chapters_search_this' => 'Bu bölümü ara',

    // Pages
    'page' => 'Sayfa',
    'pages' => 'Sayfalar',
    'x_pages' => ':count Sayfa|:count Sayfalar',
    'pages_popular' => 'Popüler Sayfa',
    'pages_new' => 'Yeni Sayfa',
    'pages_attachments' => 'Ekler',
    'pages_navigation' => 'Sayfa Navigasyonu',
    'pages_delete' => 'Sayfa Sil',
    'pages_delete_named' => 'Sayfayı Sil :pageName',
    'pages_delete_draft_named' => 'Taslak Sayfayı Sil :pageName',
    'pages_delete_draft' => 'Taslak Sayfayı Sil',
    'pages_delete_success' => 'Sayfa silindi',
    'pages_delete_draft_success' => 'Taslak sayfa silindi',
    'pages_delete_confirm' => 'Bu sayfayı silmek istediğinize emin misiniz?',
    'pages_delete_draft_confirm' => 'Bu taslak sayfayı silmek istediğinize emin misiniz?',
    'pages_editing_named' => 'Sayfa Düzenleme :pageName',
    'pages_edit_draft_options' => 'Taslak Ayarları',
    'pages_edit_save_draft' => 'Taslağı Kaydet',
    'pages_edit_draft' => 'Taslak Sayfayı Düzenle',
    'pages_editing_draft' => 'Taslak Düzenleme',
    'pages_editing_page' => 'Sayfa Düzenleme',
    'pages_edit_draft_save_at' => 'Taslak kaydedildi',
    'pages_edit_delete_draft' => 'Taslak Sil',
    'pages_edit_discard_draft' => 'Taslağı İptal Et',
    'pages_edit_set_changelog' => 'Değişiklik Logunu Ayarla',
    'pages_edit_enter_changelog_desc' => 'Yaptığınız değişikliklerin kısa bir açıklamasını girin',
    'pages_edit_enter_changelog' => 'Deişiklik Kaydı Girin',
    'pages_save' => 'Sayfayı Kaydet',
    'pages_title' => 'Sayfa Başlığı',
    'pages_name' => 'Sayfa Adı',
    'pages_md_editor' => 'Editör',
    'pages_md_preview' => 'Önizleme',
    'pages_md_insert_image' => 'Resim Ekle',
    'pages_md_insert_link' => 'Öğe Listesi Ekle',
    'pages_md_insert_drawing' => 'Çizim Ekle',
    'pages_not_in_chapter' => 'Sayfa bir bölümde değil',
    'pages_move' => 'Sayfayı Taşı',
    'pages_move_success' => 'Sayfa şuraya taşındı ":parentName"',
    'pages_copy' => 'Sayfayı Kopyala',
    'pages_copy_desination' => 'Kopyalama Hedefi',
    'pages_copy_success' => 'Sayfa Başarıyla Kopyalandı',
    'pages_permissions' => 'Sayfa İzinleri',
    'pages_permissions_success' => 'Sayfa izinleri güncellendi',
    'pages_revision' => 'Revizyon',
    'pages_revisions' => 'Sayfa Revizyonu',
    'pages_revisions_named' => 'Şu Sayfanın Revizyonu :pageName',
    'pages_revision_named' => 'Şu Sayfa İçin Revizyon :pageName',
    'pages_revisions_created_by' => 'Oluşturan Kişi',
    'pages_revisions_date' => 'Revizyon Tarihi',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revizyon #:id',
    'pages_revisions_numbered_changes' => '#:id Revizyonundaki Değişiklikler',
    'pages_revisions_changelog' => 'Değişiklik Geçmişi',
    'pages_revisions_changes' => 'Değişiklikler',
    'pages_revisions_current' => 'Geçerli Versiyon',
    'pages_revisions_preview' => 'Önizleme',
    'pages_revisions_restore' => 'Geri Yükle',
    'pages_revisions_none' => 'Bu sayfanın bir revizyonu yok',
    'pages_copy_link' => 'Linki Kopyala',
    'pages_edit_content_link' => 'İçeriği Düzenle',
    'pages_permissions_active' => 'Sayfa İzinleri Aktif',
    'pages_initial_revision' => 'İlk yayın',
    'pages_initial_name' => 'Yeni Sayfa',
    'pages_editing_draft_notification' => 'Şu anda en son kaydedilen taslağı düzenliyorsunuz :timeDiff.',
    'pages_draft_edited_notification' => 'Bu sayfa bu süre boyunca güncellendi. Bu taslağı terketmeniz önerilir.',
    'pages_draft_edit_active' => [
        'start_a' => ':count kullanıcı bu sayfayı düzenlemeye başladı',
        'start_b' => ':userName bu sayfayı düzenlemeye başladı',
        'time_a' => 'sayfa son güncellendiğinden beri',
        'time_b' => 'son :minCount dakikada',
        'message' => ':start :time. Diğerlerinin güncellemelerinin üzerine yazmamaya dikkat edin!',
    ],
    'pages_draft_discarded' => 'Taslak iptal edildi, Editör mevcut sayfa içeriği ile güncelledi.',
    'pages_specific' => 'Belirli Sayfa',
    'pages_is_template' => 'Sayfa Şablonu',

    // Editor Sidebar
    'page_tags' => 'Sayfa Etiketleri',
    'chapter_tags' => 'Bölüm Etiketler',
    'book_tags' => 'Kitap Etiketleri',
    'shelf_tags' => 'Raf Etiketleri',
    'tag' => 'Etiket',
    'tags' =>  'Etiketler',
    'tag_name' =>  'Etiket Adı',
    'tag_value' => 'Etiket Değeri (Opsiyonel)',
    'tags_explain' => "İçeriğinizi daha iyi kategorize etmek için bazı etiketler ekleyin. \n Daha ayrıntılı bir organizasyon için bir etikete değer atayabilirsiniz.",
    'tags_add' => 'Başka etiket ekle',
    'tags_remove' => 'Bu etiketi kaldır',
    'attachments' => 'Ekler',
    'attachments_explain' => 'Bazı dosyalar yükleyin veya sayfanızda görüntülenecek bağlantılar ekleyin. Bunlar sayfa kenar çubuğunda görülebilir.',
    'attachments_explain_instant_save' => 'Buradaki değişiklikler anında kaydedilir.',
    'attachments_items' => 'Ekli Öğeler',
    'attachments_upload' => 'Dosya Yükle',
    'attachments_link' => 'Link iliştir',
    'attachments_set_link' => 'Linki Ayarla',
    'attachments_delete_confirm' => 'Bu eki silmek istediğinizi onaylamak için tekrar sil\'i tıklayın.',
    'attachments_dropzone' => 'Dosyayı sürükleyin veya dosya eklemek için buraya tıklayın',
    'attachments_no_files' => 'Hiç dosya yüklenmemiş',
    'attachments_explain_link' => 'Dosya yüklememeyi tercih ederseniz bağlantı ekleyebilirsiniz. Bu, başka bir sayfaya veya buluttaki bir dosyaya bir link olabilir.',
    'attachments_link_name' => 'Link Adı',
    'attachment_link' => 'Ekli link',
    'attachments_link_url' => 'Dosya linki',
    'attachments_link_url_hint' => 'site veya dosya Url\'si',
    'attach' => 'Ekle',
    'attachments_edit_file' => 'Dosyayı Düzenle',
    'attachments_edit_file_name' => 'Dosya Adı',
    'attachments_edit_drop_upload' => 'Dosyayı sürükleyin veya dosya eklemek için buraya tıklayın ve üzerine yazın',
    'attachments_order_updated' => 'Eklerin sırası güncellendi',
    'attachments_updated_success' => 'Eklerin detayları güncellendi',
    'attachments_deleted' => 'Ek silindi',
    'attachments_file_uploaded' => 'Dosya başarıyla yüklendi',
    'attachments_file_updated' => 'Dosya başarıyla güncellendi',
    'attachments_link_attached' => 'Link başarıyla sayfaya eklendi',
    'templates' => 'Şablonlar',
    'templates_set_as_template' => 'Sayfa bir şablon',
    'templates_explain_set_as_template' => 'Bu sayfayı bir şablon olarak ayarlayabilirsiniz, böylece içeriğini başka sayfalar oluştururken kullanın. Diğer kullanıcılar bu sayfa için görüntüleme izinlerine sahipse bu şablonu kullanabilir.',
    'templates_replace_content' => 'Sayfa içeriğini değiştir',
    'templates_append_content' => 'Sayfa içeriğine ekle',
    'templates_prepend_content' => 'Sayfa içeriğinin başına getir',

    // Profile View
    'profile_user_for_x' => ':time için kullanıcı',
    'profile_created_content' => 'İçerik Oluşturuldu',
    'profile_not_created_pages' => ':userName herhangi bir sayfa oluşturmamış',
    'profile_not_created_chapters' => ':userName herhangi bir bölüm oluşturmamış',
    'profile_not_created_books' => ':userName herhangi bir kitap oluşturmamış',
    'profile_not_created_shelves' => ':userName herhangi bir raf oluşturmamış',

    // Comments
    'comment' => 'Yorum',
    'comments' => 'Yorumlar',
    'comment_add' => 'Yorum Ekle',
    'comment_placeholder' => 'Buraya bir yorum bırakın',
    'comment_count' => '{0} Yorum Yok|{1} 1 Yorum|[2,*] :count Yorum',
    'comment_save' => 'Yorumu Kaydet',
    'comment_saving' => 'Yorum kaydediliyor...',
    'comment_deleting' => 'Yorum siliniyor...',
    'comment_new' => 'Yeni Yorum',
    'comment_created' => ':createDiff tarihinde yorum eklendi',
    'comment_updated' => ':updateDiff tarihinde :username güncelledi',
    'comment_deleted_success' => 'Yorum silindi',
    'comment_created_success' => 'Yorum eklendi',
    'comment_updated_success' => 'Yorum güncellendi',
    'comment_delete_confirm' => 'Bu yorumu silmek istediğinize emin misiniz?',
    'comment_in_reply_to' => ':commentId cevap olarak',

    // Revision
    'revision_delete_confirm' => 'Bu revizyonu silmek istediğinize emin misiniz??',
    'revision_restore_confirm' => 'Bu revizyonu geri yüklemek istediğinize emin misiniz? Geçerli sayfa içeriği değiştirilecektir.',
    'revision_delete_success' => 'Revizyon silindi',
    'revision_cannot_delete_latest' => 'Son revizyon silinemiyor.'
];