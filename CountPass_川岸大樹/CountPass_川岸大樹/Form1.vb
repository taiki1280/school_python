Public Class fmtCalcPrice
    Dim max, min, cnt As Integer
    Private Sub Loaded(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim r As Random = New Random()
        Dim num As Integer
        For i As Integer = 1 To 10
            num = r.Next(100 + 1)
            If (i = 1) Then
                min = num
                max = num
            Else
                If min > num Then
                    min = num
                End If
                If max < num Then
                    max = num
                End If
            End If
            If num >= 60 Then
                cnt += 1
            End If
            lstScore.Items.Add(num)
        Next
    End Sub

    Private Sub btnMaxValue_Click(sender As Object, e As EventArgs) Handles btnMaxValue.Click
        MessageBox.Show(String.Format("最高点は{0}点です", max), "最高得点")
    End Sub

    Private Sub btnMinValue_Click(sender As Object, e As EventArgs) Handles btnMinValue.Click
        MessageBox.Show(String.Format("最低点は{0}点です", min), "最低得点")
    End Sub

    Private Sub btnCountPass_Click(sender As Object, e As EventArgs) Handles btnCountPass.Click
        MessageBox.Show(String.Format("合格者は{0}人です", cnt), "合格者数")
    End Sub

    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
