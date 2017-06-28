from django.conf.urls import url
from home import views
from .views import home, inner , temp


urlpatterns=[
url(r'^$',home,name='home'),
url(r'^inner/$',inner,name='inner'),
url(r'^temp/$',inner,name='temp'),
]


