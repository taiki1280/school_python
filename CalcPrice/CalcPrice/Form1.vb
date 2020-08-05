Public Class Form1
    Const StandardPrice As Integer = 3600
    Private Sub InitProc(sender As Object, e As EventArgs) Handles MyBase.Load
        lblStandardPrice.Text = StandardPrice.ToString("#,##0円")
    End Sub

    Private Sub Recalc(sender As Object, e As EventArgs) Handles rbStudent.CheckedChanged, rbNone.CheckedChanged, rbHolder.CheckedChanged
        Dim SalesPrice As Integer = StandardPrice
        If (rbStudent.Checked) Then
            SalesPrice *= 0.9
        ElseIf (rbHolder.Checked) Then
            SalesPrice *= 0.85
        End If
        lblSalesPrice.Text = SalesPrice.ToString("#,##0円")
    End Sub

    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
