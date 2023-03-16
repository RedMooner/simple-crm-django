from django.contrib import admin
from django.urls import path, include

from django.conf import settings
from django.conf.urls.static import static

urlpatterns = [
    path("admin/", admin.site.urls),
    path("", include("main.urls")),
    path("board", include("Kanban.urls")),
    path("accounts/", include("django.contrib.auth.urls")),  # Добавили новый марш
    path("accounts/", include("accounts.urls")),  # Добавили новый марш
] + static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)
