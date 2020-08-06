Imports System.Threading
Public Class frmManeGrade
    Public Function Check(value)
        If value >= 60 Then
            Return "合"
        Else
            Return "否"
        End If
    End Function
    Private Sub InitProc(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim points As New Dictionary(Of String, Integer)()
        points.Add("基本情報", 60)
        points.Add("HTML", 60)
        points.Add("JavaScript", 40)
        points.Add("Java", 80)
        points.Add("Python", 50)
        points.Add("オブジェクト指向", 90)
        For i As Integer = 0 To 5
            lstScore.Items.Add(String.Format("{0} {1} {2}", points.Keys(i), points(points.Keys(i)), Check(points(points.Keys(i)))))
        Next
    End Sub
    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
