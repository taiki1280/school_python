Public Class frmCalcPrice
    Private Sub btnCalc_Click(sender As Object, e As EventArgs) Handles btnCalc.Click
        Dim SalesPrice As Integer = CInt(txtStandardPrice.Text)
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
