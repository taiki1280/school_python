from django.db import models
# from .forms import Form


class Regist(models.Model):
    genders = ["男性", "女性", "未回答"]
    couse = ["システム開発", "AIデータサイエンス", "高度システム開発", "ネットワークセキュリティ"]
    subjects = [
        "Python", "JavaScript", "Java", "PHP", "C言語", "Go言語", "オブジェクト指向設計",
        "ディープラーニング", "データサイエンス", "ネットワークプログラミング", "セキュアプログラミング",
        "クラウドネイティブプログラミング"
    ]

    name = models.CharField(max_length=100)
    age = models.IntegerField(default=0)
    gender = models.CharField(max_length=100,
                              choices=[(v, v) for v in genders])
    belong = models.CharField(max_length=100, choices=[(v, v) for v in couse])
    subject = models.CharField(max_length=100,
                               choices=[(v, v) for v in subjects])

    def __str__(self):
        return f'{self.id:02}: {self.name} {self.gender} {self.belong} {self.subject}'