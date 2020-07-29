result_of_exam = {"国語": 75, "算数": 80}
print(result_of_exam)
del(result_of_exam["算数"])
result_of_exam["数学"] = 80
result_of_exam.update({"数学": 80})
result_of_exam.setdefault("数学", 80)
print(result_of_exam)
result_of_exam.update({"理科": 65, "社会": 90, "英語": 70})
print(result_of_exam)
