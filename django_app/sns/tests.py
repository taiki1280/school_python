from django.test import TestCase


class SnsTests(TestCase):
    def test_check(self):
        x = True
        self.assertTrue(x)
        y = 0
        self.assertGreater(y, 100)
        nn = None
        self.assertIsNone(nn)
