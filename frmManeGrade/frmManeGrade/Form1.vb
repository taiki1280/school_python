Imports System.Threading
Public Class frmManeGrade
    Private Sub InitProc(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim points As New Dictionary(Of String, Integer) From
        {
            {"基本情報", 60},
            {"HTML", 60},
            {"JavaScript", 40},
            {"Java", 80},
            {"Python", 50},
            {"オブジェクト指向", 90}
        }
        Dim average As Integer = 0
        For i As Integer = 0 To points.Count() - 1
            average += points.Values(i)
            lstScore.Items.Add(String.Format("{0} {1} {2}", points.Keys(i), points.Values(i), If(points.Values(i) >= 60, "合格", "否")))
        Next
        average /= points.Count()
        lstScore.Items.Add("")
        lstScore.Items.Add(String.Format("平均点　{0}", average))
    End Sub
    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
