Public Class fmtShowMessage
    Private Sub ShowMessage(sender As Object, e As EventArgs) Handles btnMessage.Click
        'lblMessage.Text = "Hello VB!"'
        'メッセージボックスに日付を表示します。'
        MessageBox.Show(#3/14/2020#)    '#で囲むと日付型のリテラル
    End Sub

    Private Sub ExitProc(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
