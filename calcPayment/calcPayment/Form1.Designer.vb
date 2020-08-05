<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class Form1
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
        Me.Label1 = New System.Windows.Forms.Label()
        Me.txtHourlyPay = New System.Windows.Forms.TextBox()
        Me.txtHour = New System.Windows.Forms.TextBox()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.txtMinute = New System.Windows.Forms.TextBox()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.lblPayment = New System.Windows.Forms.Label()
        Me.btnCalc = New System.Windows.Forms.Button()
        Me.btnExit = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(50, 50)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(65, 18)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "時給(&P)"
        '
        'txtHourlyPay
        '
        Me.txtHourlyPay.Location = New System.Drawing.Point(200, 47)
        Me.txtHourlyPay.Name = "txtHourlyPay"
        Me.txtHourlyPay.Size = New System.Drawing.Size(140, 25)
        Me.txtHourlyPay.TabIndex = 1
        '
        'txtHour
        '
        Me.txtHour.Location = New System.Drawing.Point(200, 147)
        Me.txtHour.Name = "txtHour"
        Me.txtHour.Size = New System.Drawing.Size(140, 25)
        Me.txtHour.TabIndex = 3
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(50, 150)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(66, 18)
        Me.Label2.TabIndex = 2
        Me.Label2.Text = "時間(&H)"
        '
        'txtMinute
        '
        Me.txtMinute.Location = New System.Drawing.Point(596, 147)
        Me.txtMinute.Name = "txtMinute"
        Me.txtMinute.Size = New System.Drawing.Size(140, 25)
        Me.txtMinute.TabIndex = 5
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(446, 150)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(49, 18)
        Me.Label3.TabIndex = 4
        Me.Label3.Text = "分(&M)"
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(50, 250)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(83, 18)
        Me.Label4.TabIndex = 6
        Me.Label4.Text = "支給額(&A)"
        '
        'lblPayment
        '
        Me.lblPayment.AutoSize = True
        Me.lblPayment.Location = New System.Drawing.Point(197, 250)
        Me.lblPayment.Name = "lblPayment"
        Me.lblPayment.Size = New System.Drawing.Size(0, 18)
        Me.lblPayment.TabIndex = 7
        '
        'btnCalc
        '
        Me.btnCalc.DialogResult = System.Windows.Forms.DialogResult.Cancel
        Me.btnCalc.Location = New System.Drawing.Point(200, 323)
        Me.btnCalc.Name = "btnCalc"
        Me.btnCalc.Size = New System.Drawing.Size(120, 50)
        Me.btnCalc.TabIndex = 8
        Me.btnCalc.Text = "計算(&C)"
        Me.btnCalc.UseVisualStyleBackColor = True
        '
        'btnExit
        '
        Me.btnExit.DialogResult = System.Windows.Forms.DialogResult.Cancel
        Me.btnExit.Location = New System.Drawing.Point(449, 323)
        Me.btnExit.Name = "btnExit"
        Me.btnExit.Size = New System.Drawing.Size(120, 50)
        Me.btnExit.TabIndex = 9
        Me.btnExit.Text = "終了(&X)"
        Me.btnExit.UseVisualStyleBackColor = True
        '
        'Form1
        '
        Me.AcceptButton = Me.btnCalc
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 18.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.CancelButton = Me.btnExit
        Me.ClientSize = New System.Drawing.Size(800, 450)
        Me.Controls.Add(Me.btnExit)
        Me.Controls.Add(Me.btnCalc)
        Me.Controls.Add(Me.lblPayment)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.txtMinute)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.txtHour)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.txtHourlyPay)
        Me.Controls.Add(Me.Label1)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.MaximizeBox = False
        Me.Name = "Form1"
        Me.Text = "アルバイト給与計算プログラム"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents Label1 As Label
    Friend WithEvents txtHourlyPay As TextBox
    Friend WithEvents txtHour As TextBox
    Friend WithEvents Label2 As Label
    Friend WithEvents txtMinute As TextBox
    Friend WithEvents Label3 As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents lblPayment As Label
    Friend WithEvents btnCalc As Button
    Friend WithEvents btnExit As Button

    Private Sub btnCalc_Click(sender As Object, e As EventArgs) Handles btnCalc.Click
        If (txtHourlyPay.TextLength > 0 AndAlso txtHour.TextLength > 0 AndAlso txtMinute.TextLength > 0) Then
            lblPayment.Text = (CInt(txtHour.Text) + CInt(txtMinute.Text) / 60) * CInt(txtHourlyPay.Text)
        End If
    End Sub

    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
