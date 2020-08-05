<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class fmtShowMessage
    Inherits System.Windows.Forms.Form

    'フォームがコンポーネントの一覧をクリーンアップするために dispose をオーバーライドします。
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Windows フォーム デザイナーで必要です。
    Private components As System.ComponentModel.IContainer

    'メモ: 以下のプロシージャは Windows フォーム デザイナーで必要です。
    'Windows フォーム デザイナーを使用して変更できます。  
    'コード エディターを使って変更しないでください。
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.ShowString1 = New System.Windows.Forms.Button()
        Me.ShowString2 = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'ShowString1
        '
        Me.ShowString1.Location = New System.Drawing.Point(91, 124)
        Me.ShowString1.Name = "ShowString1"
        Me.ShowString1.Size = New System.Drawing.Size(153, 51)
        Me.ShowString1.TabIndex = 0
        Me.ShowString1.Text = "Button1"
        Me.ShowString1.UseVisualStyleBackColor = True
        '
        'ShowString2
        '
        Me.ShowString2.Location = New System.Drawing.Point(368, 124)
        Me.ShowString2.Name = "ShowString2"
        Me.ShowString2.Size = New System.Drawing.Size(153, 51)
        Me.ShowString2.TabIndex = 1
        Me.ShowString2.Text = "Button2"
        Me.ShowString2.UseVisualStyleBackColor = True
        '
        'fmtShowMessage
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 18.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(607, 289)
        Me.Controls.Add(Me.ShowString2)
        Me.Controls.Add(Me.ShowString1)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.MaximizeBox = False
        Me.Name = "fmtShowMessage"
        Me.Text = "Form1"
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents ShowString1 As Button
    Friend WithEvents ShowString2 As Button

    Dim x As String = "外側のx"
    Private Sub ShowString1_Click(sender As Object, e As EventArgs) Handles ShowString1.Click
        Dim x As String = "内側のx"

        Dim y As String = "内側のy"
        '内側のx
        Debug.WriteLine(x)
    End Sub

    Private Sub ShowString2_Click(sender As Object, e As EventArgs) Handles ShowString2.Click
        '外側のx
        Debug.WriteLine(x)

        '存在しない
        'Debug.WriteLine(y)

    End Sub
End Class
