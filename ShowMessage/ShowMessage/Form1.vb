Public Class fmtShowMessage
    Private Sub ShowMessage(sender As Object, e As EventArgs) Handles btnMessage.Click
        lblMessage.Text = "Hello VB!"
    End Sub

    Private Sub ExitProc(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
